#!/bin/bash

sudo yum install -y httpd-tools

#Replace the DNS of the Application Load Balancer
ab -n 100000 -c 1000 http://ALB-WEB-2106733477.us-east-1.elb.amazonaws.com/
