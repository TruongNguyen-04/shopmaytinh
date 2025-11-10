<style type="text/css">

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
/*reset css*/
div,label{margin:0;padding:0;}

h1{font-size:1.5em;margin:10px;}
/****** Style Star Rating Widget *****/
#rating{width: 100%;border:none;float:left;}
#rating>input[type='radio']{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:12px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}
#rating>.half:before{content:"\f089";position:absolute;}
#rating>label{color:#ddd;float:right;margin-right: }
#rating>input[type='radio']:checked~label,
#rating :not(:checked)>label:hover, 
#rating :not(:checked)>label:hover~label{color:#FFD700;}

#rating>input[type='radio']:checked+label:hover,
#rating>input[type='radio']:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input[type='radio']:checked~label:hover~label{color:#FFED85;}
#rating>input[type='radio']#star1:checked ~ label.full:before {
  color: rgba(0,0,0);
  /* font-size: 25px;
  text-shadow: 0 0 20px #952; */
}
#rating>input[type='radio']#star2:checked ~ label.full:before {
  color: rgba(0,0,0,0.5);
  /* font-size: 25px;
  text-shadow: 0 0 20px #952; */
}
#rating>input[type='radio']#star3:checked ~ label.full:before {
 color:#99FFCC		;
  /* font-size: 25px;
  text-shadow: 0 0 20px #952; */
}
#rating>input[type='radio']#star4:checked ~ label.full:before {
 color: #FFFF66	;
  /* font-size: 25px;
  text-shadow: 0 0 20px #952; */
}
#rating>input[type='radio']#star5:checked ~ label.full:before {
  color: yellow;
  /* font-size: 25px;
  text-shadow: 0 0 20px #952; */
}

.send-comment-t24{
	margin-left: 12px;
	padding: 5px 30px;
	background-color: skyblue;
	color: white;
	border-radius: 5px;
}

#rating{    
	/* display: flex; */
    /* justify-content: center; */
    align-items: center;
}
</style>

<div class="container" style="overflow: hidden;">
	<h2>
		Bình luận
	</h2>
	<form method="POST">
		<div class="row">
			<div class="col-md-5">
				<div id="rating">
				Mức độ hài lòng
			    <input type="radio" id="star5" name="vote" value="verygood" required />
			    <label class = "full" for="star5" title="Rất Tốt - 5 Sao"></label>
			 
			    <input type="radio" id="star4" name="vote" value="good" required/>
			    <label class = "full" for="star4" title="Tốt - 4 Sao"></label>
			 
			    <input type="radio" id="star3" name="vote" value="normal" required/>
			    <label class = "full" for="star3" title="Bình Thường - 3 Sao"></label>
			 
			    <input type="radio" id="star2" name="vote" value="bad" required/>
			    <label class = "full" for="star2" title="Tệ - 2 Sao"></label>
			 
			    <input type="radio" id="star1" name="vote" value="verybad" required />
			    <label class = "full" for="star1" title="Cực Tệ - 1 star" ></label>
			    <br>
				
			</div>
		</div>
		<div class="col-md-7"></div>
	</div>
	<div class="row">
		<h4 style="margin-bottom: 10px;margin-left: 10px">
			Nhập nội dung bình luận <br>
		</h4>
		<p>
			<textarea id="nd" name="noidungbinhluan" style="border: 1px solid #ccc; padding: 10px; border-radius: 14px;margin-left: 10px" cols="100"></textarea>
		</p
    </div>

<div>

				<input class="send-comment-t24" type="submit" name="binhluan" value="Gửi">
			</div>

			
	</form>
</div><!-- <textarea id="nd" name="noidungbinhluan" style="border: 1px solid black; border-radius: 14px" cols="100"></textarea><br>
		<input style="margin-left: 10px;width: 70px;border-style: groove;background-color: silver" type="submit" name="binhluan" value="Gửi"> -->