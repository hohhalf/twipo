<!DOCTYPE html>
<html>
    <head>
        <title>Twipo</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><h1>Twipo</h1></div>
                 <hr>
                @foreach($twips as $twip)
                  <article>
                      <h2>{{$twip->title}}</h2>
                      <div class="body"><h3>{{$twip->twip}}</h3></div>
                  </article>
                @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
