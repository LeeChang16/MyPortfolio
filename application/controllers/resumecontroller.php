<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resumecontroller extends CI_Controller {

	public function download() {
		$resumeFile = APPPATH . 'asset/document/resume2'; // Adjust the file path based on your directory structure and file name
  
		// Check if the resume file exists
		if (file_exists($resumeFile)) {
		   // Set the appropriate headers for the file download
		   header('Content-Description: File Transfer');
		   header('Content-Type: application/octet-stream');
		   header('Content-Disposition: attachment; filename="' . basename($resumeFile) . '"');
		   header('Expires: 0');
		   header('Cache-Control: must-revalidate');
		   header('Pragma: public');
		   header('Content-Length: ' . filesize($resumeFile));
		   readfile($resumeFile);
		   exit;
		} else {
		   // File not found error handling (customize this as needed)
		   show_error('Resume file not found.', 404);
		}
	 }
}
