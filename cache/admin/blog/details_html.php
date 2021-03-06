
<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>Simple example - Editor.md examples</title>
        <link rel="stylesheet" href="public/admin/editor.md/examples/css/style.css" />
        <link rel="stylesheet" href="public/admin/editor.md/css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    </head>
    <body class="home">
        
    <div id="layout">
        <header>
            <h1>发表博文</h1>
        </header>
        <?php foreach($data as $value):?>
        <form action="index.php?c=blog&m=admin&a=changeBlog&bid=<?=$value['bid']?>" method="post">
             <div style="position:relative;left:40%;top:-10px;">
                <th align="center">博客标题</th>
                <th><input type="text" name="title" value="<?=$value['title']?>"></th>
            </div>
           <table width=1000 style="margin:0 auto;">
                                 
                <tr>
                    <td colspan="2">
                        <div id="test-editormd">
                            <textarea style="display:none;" name='con'>
                                <?=$value['content']?>
                            </textarea>
                         </div>
                     </td>
                  
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div style="position:relative;left:30%;">
                <th><input type="submit" value="提交" /></th>
            </div>
        </form>
        <?php endforeach;?>
    </div>
   <script src="public/admin/editor.md/examples/js/jquery.min.js"></script>
   <script src="public/admin/editor.md/editormd.min.js"></script>
   <script type="text/javascript">
            var testEditor;

            $(function() {
                testEditor = editormd("test-editormd", {
                    width   : "80%",
                    height  : 400,
                    syncScrolling : "single",
                    path    : "public/admin/editor.md/lib/"
                });
                
                /*
                // or
                testEditor = editormd({
                    id      : "test-editormd",
                    width   : "90%",
                    height  : 640,
                    path    : "../lib/"
                });
                */
            });
        </script>
    </body>
</html>