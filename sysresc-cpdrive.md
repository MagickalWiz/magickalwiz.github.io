Begin with a System Rescue USB. Skip to line -- if you already have one. If not, continue reading to learn how to make one.


https://system-rescue.org/download

Download the AMD64 ISO, and read the instructions below the download links to install on a USB.


WARNING: THIS GUIDE IS CREATED FOR USE IN LINUX SYSTEMS

Begin by opening Terminal and becoming root, either by 'su -' or 'sudo -i'. Type 'fdisk -l' to list the various drives. Triple-check (at the very least) that you have the correct drive.

>magickalwiz@magickalwiz:~$ su -
>magickalwiz@magickalwiz:~$ sudo -i
>root@magickalwiz:#

Create a new directory for the drive: 'mkdir /mnt/DRIVENAMEHERE'
Next: 'mount /dev/DRIVENAMEHERE /mnt/DRIVENAMEHERE

>root@magickalwiz:# mkdir /mnt/DRIVENAMEHERE
>root@magickalwiz:# mount /dev/DRIVENAMEHERE /mnt/DRIVENAMEHERE

Assuming you followed all these directions correctly, congratulations are in order. Go ask someone to congratulate you, because you just copied a drive and can sort through it without inadvertently breaking anything.
You may now go search for whatever you wanted, without danger of ruining the original.
