# Решение в [SETUP.md](https://github.com/bgelov/devops-excercise/blob/main/SETUP.md)

# Introduction

We are building an infrastructure that consists of multiple hypothetical applications. 
One application is written in PHP and connects to a MySQL server. 
Another is written in node.js and is fairly static. We want to balance both these 
applications and be able to spin off more application services if needed. 
Both applications should be behind SSL and do an SSL termination, 
so all internal requests happen without SSL.

## Components 

1 nodejs application
1 php application
1 php-fpm 8.2
1 MySQL database
1 Nginx as SSL termination
1 HaProxy

## Assumptions

1. All components are running on the same host (bare-metal)
2. Linux (Ubuntu) is used as operating system

## Requirements

1. Use ansible to build repeatable infrastructure
2. Docker usage is up to candidate
3. Make sure that solution is production grade (not development grade)
4. Provide a way on how to improve PHP application to connect to MySQL securely
5. Ask all necessary questions to clarify requirements and components
6. Document a way how would your solution would need to be improved, if we've decided to split infrastructure into multiple hosts

## Deliverables

1. Ansible playbook(s)
2. Instructions on how to run the playbook(s)
3. Document all assumptions and decisions

Be prepared to present your solution and answer questions about it.
