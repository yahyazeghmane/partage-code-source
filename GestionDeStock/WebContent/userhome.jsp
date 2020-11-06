<%-- 
    Document   : userhome
    Created on : Nov 19, 2015, 11:59:22 AM
    Author     : Aravind Sankaran Nair
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<% String id=request.getParameter("id");
String un=request.getParameter("uname");
%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <center>
        <h1>Welcome <%=un%></h1>
        <h1>Your ID is <%=id%></h1>
        </center>
    </body>
</html>