# Emmet

## HTML編
- HTMLのひな形を一瞬で作れる
- idは#、classは.
- タグを表すための<と>は不要。タグ名だけでいい
- 入れ子にする際にはA>Bのように>を使う
- 展開した時に連番にしたいときは$を使う
- 属性を表すときは、[属性名=値]と書く。値に"は不要
- 各タグにいい感じにデフォルト属性をつけてくれる

### menu
```
nav>ul#menu>li*5>a[href=#]
```
```
結果
<nav>
    <ul id="menu">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
</nav>
```

### 連番
```
.thumb{サンプル$}*6
```
```
結果
<div class="thumb">サンプル1</div>
<div class="thumb">サンプル2</div>
<div class="thumb">サンプル3</div>
<div class="thumb">サンプル4</div>
<div class="thumb">サンプル5</div>
<div class="thumb">サンプル6</div>
```

### HTMLの雛形
#### HTML5
```
!
```
```
結果
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

</body>
</html>
```

#### HTML4.01 transitional
```
html:4t
```
```
結果
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
```

## CSS編
```
tac => text-align: center;
db => display: block;
m:a => margin: auto;
tdn => text-decoration: none;
pol => position: relative;
poa => position: absolute;
pof => position: fixed;
w100 => width: 100px;
h100 => height: 100px;
fsz12 => font-size: 12px;
fsz12pt => font-size: 12pt;
ff => font-family: serif;
pd => padding: ;

bg => background: #fff;
f+ => font: 1em Arial,sans-serif;
bd+ => border: 1px solid #000;
```

### ベンダープレフィックス
#### box-sizing
```
-bx

-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;

-bxc

-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
```

#### box-shadow
```
-bxs

-webkit-box-shadow: inset hoff voff blur color;
-moz-box-shadow: inset hoff voff blur color;
box-shadow: inset hoff voff blur color;
```

#### Transition
```
-trans

-webkit-transition: prop time;
-moz-transition: prop time;
-ms-transition: prop time;
-o-transition: prop time;
transition: prop time;
```

#### Border-radius
```
-dbrs

-webkit-border-radius: ;
-moz-border-radius: ;
border-radius: ;

-bdrs10

-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
```