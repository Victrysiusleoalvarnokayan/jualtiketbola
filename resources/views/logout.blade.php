<?php
session()->flush();
return redirect()->route('login')->with('success', 'Anda sudah logout.');

?>