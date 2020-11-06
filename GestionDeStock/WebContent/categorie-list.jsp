<%@ page import="model.Categorieart" %>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<html>
<head>
	<title>User Management Application</title>
</head>
<body>
	<center>
		<h1>Categorie Management</h1>
        <h2>
        	<a href="new">Add New Categorie</a>
        	&nbsp;&nbsp;&nbsp;
        	<a href="list">List All Article</a>
        	
        </h2>
	</center>
    <div align="center">
        <table border="1" cellpadding="5">
            <caption><h2>List of Categorie</h2></caption>
            <tr>
                <th>NomCat</th>
                <th>Description</th>
                <th>Actions</th>
               
               
                
                
            </tr>
            <c:forEach var="categorieart" items="${listCategorieart}">
               
                <tr>
                    <td><c:out value="${categorieart.nomCat}" /></td>
                    <td><c:out value="${categorieart.description}" /></td>
                    
                    <td>
                    	<a href="edit?NomCat=<c:out value='${categorieart.nomCat}' />">Edit</a>
                    	 &nbsp;&nbsp;&nbsp;&nbsp;
                    	<a href="delete?NomCat=<c:out value='${categorieart.nomCat}' />">Delete</a>                    	
                    </td>
                </tr>
            </c:forEach> 
           
        </table>
    </div>	
</body>
</html>
