<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PhpImap\Mailbox as ImapMailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;

class EmailController extends Controller
{
    
    public function index()
    {
		$mailbox = new ImapMailbox('{imap.gmail.com:993/imap/ssl}INBOX', 'hector.peredo.urbina@gmail.com', 'putalawea7344');

		$mailsIds = $mailbox->searchMailbox('ALL');
		if(!$mailsIds) {
		    die('Mailbox is empty');
		}
		var_dump($mailsIds);
		foreach ($mailsIds as $key => $mailId) {
			print_r($mailbox->getMail($mailId));
		}

    }
}
