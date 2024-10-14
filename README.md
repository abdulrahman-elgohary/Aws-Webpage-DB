# Auto-Scaling Web Application on AWS with RDS Integration

## Project Overview
This project demonstrates how to deploy a web application using Auto Scaling, an Application Load Balancer (ALB), and an RDS instance on AWS. The system automatically scales based on load and includes high availability features such as RDS Multi-AZ deployment and failover capabilities.

Features:
Auto Scaling Group (ASG): Automatically scales the number of EC2 instances based on traffic load.
Application Load Balancer (ALB): Distributes incoming traffic to the EC2 instances.
EC2 Instances: Serve the web application, connected to an RDS instance for data storage.
RDS (Relational Database Service): A highly available database using Multi-AZ deployment.
Failover Testing: Simulating failure scenarios such as an EC2 instance failure and an AZ failure.
Steps to Implement:
1. Set Up VPC and Subnets:
Create a VPC with public and private subnets across multiple Availability Zones (AZs).
Deploy NAT Gateways in public subnets to enable outbound internet access for instances in private subnets.
2. Set Up RDS (Multi-AZ):
Create an RDS instance with Multi-AZ support to ensure high availability.
Configure the database for the web application to store data such as employee records.
3. Create Auto Scaling Group (ASG) with EC2 Instances:
Launch EC2 instances in the public subnets and configure them to automatically scale based on load.
Configure the User Data script to install necessary packages, set up the web server, and connect to the RDS instance during instance initialization.
4. Configure Application Load Balancer (ALB):
Set up an Application Load Balancer in front of the EC2 instances to distribute incoming traffic.
Ensure the ALB routes traffic evenly across instances and performs health checks to detect failed instances.
5. Connect Web Application to RDS:
Modify the web application code to connect to the RDS database using environment variables or configuration files.
Ensure all EC2 instances that scale up in the ASG automatically connect to the RDS for consistent database access.
6. Simulate Auto Scaling and Failover:
Simulate high traffic load to trigger auto-scaling by stressing the ALB using load generation tools (e.g., Apache Bench or Locust).
Manually terminate EC2 instances to observe how the ASG replaces failed instances and keeps the application running smoothly.
Simulate Availability Zone failure by terminating instances in one AZ or manually triggering RDS failover to test redundancy.
7. Testing and Monitoring:
Use CloudWatch to monitor the system, set up alerts, and configure auto-scaling policies.
Test the auto-scaling and failover capabilities by simulating failures and monitoring the recovery process.

