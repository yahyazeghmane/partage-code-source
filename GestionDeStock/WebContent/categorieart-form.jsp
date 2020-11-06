s<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<html>
<head>
	<title>User Management Application</title>
</head>
<body>
	<center>
		<h1>User Management</h1>
        <h2>
        	<a href="new">Add New categorieart</a>
        	&nbsp;&nbsp;&nbsp;
        	<a href="list">List All categorieart</a>
        	
        </h2>
	</center>
    <div align="center">
		<c:if test="${categorieart != null}">
			<form action="update" method="post">
        </c:if>
        <c:if test="${categorieart == null}">
			<form action="insert" method="post">
        </c:if>
        <table border="1" cellpadding="5">
            <caption>
            	<h2>
            		<c:if test="${categorieart != null}">
            			Edit User
            		</c:if>
            		<c:if test="${categorieart == null}">
            			Add New categorieart
            		</c:if>
            	</h2>
            </caption>
        		<%--  <c:if test="${categorieart != null}"> 
        			<input type="text" name="id" value="<c:out value='${categorieart.nomCat}' />" />
        		</c:if>   --%>   
        		 
        	<tr>
                <th>Nom: </th>
                <td>
                
                	<input type="text" name="nomCat" value="<c:out value='${categorieart.nomCat}' />" />
                	
                </td>
            </tr>	
        	    
            <tr>
                <th>description: </th>
                <td>
                	<input type="text" name="description" size="45"
                			value="<c:out value='${categorieart.description}' />"
                		/>
                </td>
            </tr>
            
            <tr>
            	<td colspan="2" align="center">
            		<input type="submit" value="Save" />
            	</td>
            </tr>
        </table>
        </form>
    </div>	
</body>
</html>
