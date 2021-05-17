This is a simple guide on how to copy a drive to dig through without danger of ruining or messing with the original drive.
WARNING: THIS GUIDE IS CREATED FOR USE IN LINUX SYSTEMS

Begin with a System Rescue USB. Skip to line 10 if you already have one. If not, continue reading to learn how to make one.


https://system-rescue.org/download

Download the AMD64 ISO, and read the instructions below the download links to install on a USB.


Begin by opening Terminal and becoming root, either by `su -` or `sudo -i`. Type `fdisk -l` to list the various drives. Triple-check (at the very least) that you have the correct drive.

>magickalwiz@magickalwiz:\~$ su -<br />
>magickalwiz@magickalwiz:\~$ sudo -i<br />
>root@magickalwiz:# fdisk -l

Create a new directory for the drive: `mkdir /mnt/DRIVENAMEHERE`
Next: `mount /dev/DRIVENAMEHERE /mnt/DRIVENAMEHERE`

>root@magickalwiz:# mkdir /mnt/DRIVENAMEHERE<br />
>root@magickalwiz:# mount /dev/DRIVENAMEHERE /mnt/DRIVENAMEHERE

Assuming you followed all these directions correctly, congratulations are in order. Go ask someone to congratulate you, because you just copied a drive and can sort through it without inadvertently breaking anything.
You may now go search for whatever you wanted, without danger of ruining the original.
![examplefdisk](https://user-images.githubusercontent.com/54958629/118538707-67d92100-b703-11eb-9bfa-9413c1da4441.png)
