
  <body onload="init();">
    <ul id="todoItems">
    </ul>
    <form method="post" onsubmit="">
      <input type="text" id="todo" name="todo" placeholder="What do you need to do?" style="width: 200px;" />
      <input type="button" value="Add Todo Item" onclick="addTodo();"/>
    </form>
