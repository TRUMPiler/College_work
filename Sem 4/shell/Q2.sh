#!/bin/sh
#Write a cal command to do following:
#1. To display calendar of current month. (don’t give argument as 2017)
cal
#2. Display calendar for single month and Monday as the first day of week.
ncal -M -b
#3. Display calendar of January month of 2050 year.
ncal -d 2050-01

