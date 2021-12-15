FROM centos:7

RUN yum -y update && yum clean all
# RUN -y yum install sudo && yum clean all
RUN yum install -y epel-release && yum clean all


RUN yum -y install httpd && yum clean all
RUN systemctl enable httpd 

RUN yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum -y install --enablerepo=remi,remi-php74 php php-devel php-mbstring php-pdo php-xml php-gd php-fpm php-mysqlnd php-opcache php-pecl-zip libzip5 php-pecl-zip composer
 

CMD ["/sbin/init"]