<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ubuntuController extends Controller
{
    //

    public function addAccount()
    {
        return view('addAccount');
    }

    public function addAccountStore(Request $request)
    {

        $process = Process::fromShellCommandline("/root/openvpn-install.sh");
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
        // execute command
dd(1);
        $this->comment( implode( PHP_EOL, $output ) );

        dd(1);
        var_dump(exec('bash ~/openvpn-install.sh'));
        dd($request->all());
    }
}
