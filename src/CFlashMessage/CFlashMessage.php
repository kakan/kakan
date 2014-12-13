<?php
namespace Anax\CFlashMessage;
class CFlashMessage
{
	use \Anax\DI\TInjectable;

	public function __construct()
	{
		if(!isset($_SESSION['flash'])) {
			$_SESSION['flash'] = array();
		}
	}

	public function newMessage($message, $type)
	{
		$message = array('message' => $message, 'type' => $type);
		$_SESSION['flash'][] = $message;

	}
	public function showMessage() {
		$messages = $_SESSION['flash'];
		$html = null;
		if($messages) {
			foreach ($messages as $key => $message) {
				$html .= "<div class='FlashMessage-" . $message['type'] . "'><p>" . $message['message'] . "</p></div>";
			}
		} else {
			$html = null;
		}
		return $html;
	}
	public function deleteMessage() {
		$_SESSION['flash'] = null;
	}
}
?>