<?php
class Logger {
	const LOGDIR = '/tmp/';
	private $filename = '';
	private $log = '';

	public function _construct($filename) {
		$this->filename = basename($filename);
		$this->log = '';
	}
	public function _destruct() {
		$path = self::LOGDIR . $this->filename;
		if ($fp === false) {
			die('Logger: ファイルがオープンできません' . htmlspecialchars($path));
		}
		if (! flock($fp, LOCK_EX)) {
			die('Logger: ファイルのロックに失敗しました');
		}
		fwrite($fp, $this->log);
		fflush($fp);
		flock($fp, LOCK_UN);
		fclose($fp);
	}
	public function add($log) {
		$this->log .= $log . "\n";
	}
}
