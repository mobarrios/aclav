<?php


class sendMail
{
	public static function send($data = null , $view = null,  $to = null, $name = null ,$subject = null) 
	{

			Mail::send($view, $data , function($message) use ($to, $name, $subject)
			{
				$message->to($to ,$name )->subject($subject);
			});

			

	}

}

?>