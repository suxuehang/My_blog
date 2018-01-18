<?php
namespace common\helps;
/**
* 定义全局方法
*/
class Common{
	/**
	* 公共js提示弹框
	* @param $str 提示的消息
	* @param $url 跳转的连接
	* @return String 
	*/
	public static function Script($str='',$url=''){
		echo "<script>alert('".$str."');location.href='".$url."'</script>";exit;
	}
	/**
	* 公共打印方法
	* @param $str 需要打印的值
	* @param $type 1为普通打印 2为打印类型
	* @return bool|String 
	*/
	public static function p($str='',$type=1){
		if(is_array($str)){
			echo "<pre>";
			if($type==2){
				var_dump($str);exit;
			}
			print_r($str);exit;	
		}else{
			if(is_object($str)){
				echo "<pre>";
				print_r($str);exit;
			}else{
				echo $str;exit;
			}
		}
	}
}