<?php
  echo shell_exec('curl -IL -m 10 ' . $_GET['val']);
