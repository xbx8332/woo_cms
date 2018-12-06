<?php
namespace app\run\controller;


use app\common\controller\Run;

class Upload extends Run
{
    
    function uploader()
    {
        if(isset($_GET['CKEditorFuncNum'])) {
            $CKEditorFuncNum = $_GET['CKEditorFuncNum'];
        } else {
            $CKEditorFuncNum = 0;
        }
        if (empty($this->args['model'])) {
            $this->args['model'] = 'upload';
        }
        
        $upload  = $_FILES['upload'];
        $filepath  = upload_file($upload, $this->args['model']);
        
        config('app_trace', false);
        
        if ($filepath) {
            $ext = explode('.', $filepath);
    	    $ext = strtolower(array_pop($ext));
            
            
            $vfolder = db('Vfolder')->where('title', '=', trim($this->args['model']))->find();
            if (empty($vfolder)) {
                $first = db('Vfolder')->order(['id' => 'ASC'])->find();
                $vfolder_id = db('Vfolder')->insertGetId([
                    'title' => trim($this->args['model']),
                    'parent_id' => $first['id'],
                    'is_forbid_modify' => 1,
                    'created' => date('Y-m-d H:i:s'),
                    'modified' => date('Y-m-d H:i:s'),
                ]);
            } else {
                $vfolder_id = $vfolder['id'];
            }
            
            $data['vfolder_id'] = $vfolder_id;
            $data['basename']   = $upload['name'];
            $data['ext']        = $ext;
            $data['size']       = $upload['size'];
            $data['user_id']    = helper('Auth')->user('id');
            $data['type']       = 'file';
            $data['url']        = $filepath;
            $data['model']      = trim($this->args['model']);
            
            if (in_array($ext, ['jpg', 'png', 'gif', 'jpeg'])) {
                $data['type']   = 'image';
                $file_size  = @getimagesize(separator_real(WWW_ROOT . $filepath));
                $data['width']  = $file_size[0];
                $data['height'] = $file_size[1];
            }
            
            $data['created']    = date('Y-m-d H:i:s');
            $data['modified']    = date('Y-m-d H:i:s');
            
            db('Upload')->insert($data);
            
            echo json_encode([
                'uploaded' => 1,
                'url' =>  $this->root . $filepath,
                'message' => '文件上传成功'
            ]);
        } else {
            echo json_encode([
                'uploaded' => 0,
                'message' => '上传失败' . $GLOBALS['upload_file_error']
            ]);
        }
        
        /* 4.5.6
        if ($filepath) {
            $this->assign->functionNumber=$CKEditorFuncNum;
    		$this->assign->fileUrl = $filepath;
    		$this->assign->message = '上传成功';
        } else {
            $this->assign->functionNumber = $CKEditorFuncNum;
            $this->assign->message = $GLOBALS['upload_file_error'];
        }
        $this->fetch = 'upload_result';*/
    }
}
