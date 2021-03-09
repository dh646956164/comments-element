 <!DOCTYPE html>
  <html>
  <head lang="en">
      <meta charset="UTF-8">
      <title></title>
  </head>
  <body>
      <h2 style="text-align: center;">post a job</h2>
      <form action="doAction.php" method="get">
         <input type="hidden" name="act" value="add">
         <table style="margin: 0 auto;" border="1" width="80%"  cellpadding="0" cellspacing="0" bgcolor="#FF8888">
             <tr>
             <td>title</td>
             <td><input type="text" name="username" id="" placeholder="Please enter the position name"/></td>
             </tr>
             <tr>
             <td>field</td>
             <td><input type="text" name="title" id="" placeholder="Please enter your industry"/></td>
             </tr>
             <tr>
             <td>content</td>
             <td><textarea name="content" rows="10" cols="45" placeholder="Please input the job content and skills"></textarea></td>
             </tr>
             <tr>
             <td colspan="2"><input type="submit"></td>
             </tr>
         </table>
     </form>
 </body>
 </html>