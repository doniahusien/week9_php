<?php
//mkdir("Y",0700);

echo fileperms("Y")."";//4777
chmod("Y",0644);
clearstatcache();
echo fileperms("Y")."";