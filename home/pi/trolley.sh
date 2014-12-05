#! /bin/bash


function car_move () {

	p=$(( $RANDOM % 2 + 1 ))
	if [ "$p" = 2 ]
		then
			#Los Angeles
			p=22
		else
			#Hollywood
			p=27
	fi
python /home/pi/gpiotoggle.py $p

}




function  wait() {

	#Pick a random number between $1 and $2
	arg1=$1
	arg2=$2
	first=$(($2-$1))

	t=$(( $RANDOM % $first + $1 ))

	#sleep for that long
	sleep $t

}

function car_sound () {
	python /home/pi/gpiotoggle.py 18
}

function car_stop () {
	python /home/pi/gpiotoggle.py 24
}


	car_sound
		wait 1 3
car_move
		wait 5 10
car_stop
		wait 2 4
	car_sound
		wait 2 5
car_move
		wait 7 15
car_stop
		wait 0 3
car_move
		wait 1 3
	car_sound
		wait 4 7
car_stop
		wait 0 1
car_move
		wait 3 4
	car_sound
		wait 7 12
	car_sound
		wait 5 20
	car_sound
		wait 5 10
	car_sound
		wait 2 6
car_stop
		wait 1 3
car_move
		wait 4 10
car_stop
		wait 1 3
	car_sound


