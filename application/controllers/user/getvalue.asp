<%
response.expires=-1
sql="SELECT * FROM "
sql=sql & "'" & request.querystring("q") & "'"

set conn=Server.CreateObject("ADODB.Connection")
conn.Provider="Microsoft.Jet.OLEDB.4.0"
conn.Open(Server.Mappath("/db/northwind.mdb"))
set rs=Server.CreateObject("ADODB.recordset")
rs.Open sql,conn


do until rs.EOF
  for each x in rs.Fields
    response.write("<option value="&x.value&">"& x.name "&<"/option>")
  next
  rs.MoveNext
loop
%>