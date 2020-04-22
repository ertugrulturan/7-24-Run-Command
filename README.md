# 7-24-Run-Command

ubuntu & debian (apt packet os)
---
> apt-get install php -y && apt-get install screen -y

centos
---
> yum install php -y && yum install screen

Edit scirpt in "python sample.py" and "pkill python"

python sample.py run scirpt and 20 seconds later run "pkill" (repeats stop- always)

RUN,
---
> screen php run.php

BASH,
---

`#!/bin/bash
while :
do
	echo "Press [CTRL+C] to stop.."
	sleep 1
done`
