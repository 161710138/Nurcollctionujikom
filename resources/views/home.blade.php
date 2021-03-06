@extends('layouts.admin')

@section('content')
<div class="wrap">
   <div class="w"><span></span></div>
   <div class="e"><span></span></div>
   <div class="l"></div>
   <div class="c"></div>
   <div class="o"></div>
   <div class="m"><span></span></div>
   <div class="e e2"><span></span></div>
</div>
<div class="text">click anywhere to view animation</div>
<style>
*{ padding:0; margin:0;}
body{ position:fixed; display:flex; flex-direction:column; justify-content:center; align-items:center; width:100%; height:100%; top:0; background-color:skyblue; cursor:pointer;}
.wrap{ transform:scaleX(1); transition:1s;
   div{ display:inline-block; top:0; position:relative; 
      &:before, &:after{ content:''; position:absolute; background-color:white; bottom:0; width:3px; }
      span{ position:absolute; background-color:white; 
         &:before, &:after{ content:''; position:absolute; background-color:white;}
      }
   }
   &.load{ transform:scale(1);
      .w{ transform:translateX(0);
         &:before{ transform:translateX(0) rotate(-24deg)}
         &:after{ transform:translateX(0) rotate(24deg)}
         span{ transform:translateX(0);
            &:before{ transform:translateX(0) rotate(8deg)}
            &:after{ transform:translateX(0) rotate(-8deg)}
         }
      }
      .e{ transform:translateX(0) rotate(0); opacity:1;
         &:after{ transform:rotate(0);}
         &:before{ transform:rotate(0);}
         span{ opacity:1;}
      }
      .l{ transform:translateX(0);
         &:after{ transform-origin:bottom; transform:translate(0) rotate(0);}
      }
      .c{ transform:translateX(0) rotate(0); opacity:1;
         &:before{ }
      }
      .o{ transform:translateX(0); opacity:1;}
      .m{ transform:translateX(0);
         &:before{ transform:rotate(-24deg)}
         &:after{ transform:translate(0) rotate(24deg);}
         span{ transform:translate(0);}
      }
      .e2{}
      

     }     
   
   
   .w{ transform:translateX(0); 
      height:75px; width:60px; background-color:transparent; margin-right:4px;
         &:before{ height:75px; right:0px; transform:translateX(-60px) rotate(0); transform-origin:bottom;transition:1s 1.5s;}
         &:after{ height:75px; left:-3px; transform:rotate(0); transform-origin:bottom;transition:1s 1.5s;}
         span{ width:3px; height:75px; left:0; background-color:transparent;
            &:before{ left:57px; width:3px; height:75px; transform:translateX(-60px) rotate(0); transform-origin:bottom;transition:1s 1.5s;}
            &:after{ left:-3px; width:3px; height:75px; transform:rotate(0); transform-origin:bottom;transition:1s 1.5s;}
         }
      }
   .e{ transform:translateX(-98px) rotate(90deg); transition:1s 1s;
      width:55px; height:55px; color:transparent;
      span{ width:50px; height:50px; border:3.5px solid white; border-radius:50%; transform:rotate(180deg); opacity:0; background-color:transparent; z-index:-9; transition:1s 1.5s;}
      &:before{ width:8px; height:12px; right:-3px; top:28px; background-color:skyblue;}
      &:after{ width:55px; height:3px; top:25px; }
   }
   .l{ transform:translateX(-130px); transition:1s .75s;
      width:22px; height:58px; border-left:3px solid white;
      &:after{ height:3px; width:30px;transform:translate(-16.5px,-15px) rotate(-90deg); transition:1s 1s;}
   }
   .c{ transform:translateX(-200px) rotate(180deg); transition:1s 0.5s;
      width:50px; height:50px; border:3.5px solid white; border-radius:50%; opacity:0; transition:1s 0.5s;
      &:before{ width:8px; heighte:28px; right:-3px; top:12px; background-color:skyblue;}
   }
   .o{ transform:translateX(-260px); opacity:0; transition:1s 0.5s;
      width:50px; height:50px; border:3.5px solid white; border-radius:50%;}
   .m{ transform:translateX(-279px); transition:1s 0.25s;
      width:46px; height:58px; border-left:3px solid white;
      &:before{ width:3px; height:58px; left:-3px; transform-origin:top; transform:rotate(0); transition:1s;}
      &:after{ width:3px; height:58px; right:0; transform-origin:top; transform:translate(-46px) rotate(0); transition:1s;}
      span{ width:3px; height:58px; margin-left:43px; transform:translate(-46px); transition:1s;}
   }
   .e2{ transform:translateX(-359px) rotate(90deg); transition:1s;}
}

.text{ position:relative; width:100%; align-self:bottom; display:block; text-align:center; padding-top:50px; color:#333;}
</style>
<script>
$(window).load(function(){
   $('.wrap').delay(3000).toggleClass('load');
})


$(window).click(function(){
   $('.wrap').toggleClass('load');
});
</script>
@endsection
