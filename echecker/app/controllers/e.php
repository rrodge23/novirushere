<!DOCTYPE html>
<html>
<head>
<style>
	.grid div:nth-child(odd){
    	background-color:blue;
    }
    .grid div:nth-child(even){
    	background-color:yellow;
    }
   
    @media screen and (min-width: 1024px){
        .grid{
            display:grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-areas:
                "title title"
                "nav nav"
                "sidebar cont"
                "footer footer";
            -webkit-transition: all .5 ease-in-out;
            -moz-transition: all .5 ease-in-out;
            transition: all .5 ease-in-out;
                
        }
    }
    

    .grid div{
        margin:10px;
    }
    
    .title{
    	grid-area:title;
    }
    .nav{
    	grid-area:nav;
    }
    .sidebar{
    	grid-area:sidebar;

    }
    .footer{
    	grid-area:footer;
        border-radius:15px;
        
    }
    .cont{
        text-align:center;
        height:100px;
    	grid-area:cont;
        align-items:center;
    }
    
    .aw{
        width:100px ;

    }
</style>
</head>
<body>

<div class="grid">
  <div class="title">title</div>
  <div class="nav">nav</div>
  <div class="sidebar ">sidebar</div>
  <div class="cont">
    <div class="aw">aw</div>
  </div>
  
  <div class="footer">footer</div>
</div>
<script>

</script>
</body>
</html>
