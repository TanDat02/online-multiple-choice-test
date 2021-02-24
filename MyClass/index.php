<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Làm bài thi trắc nghiệm</title>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  </div> 
  <div class="container">
    <div class="panel-group">
      <div class="panel panel-primary">
        <div class="panel-heading col-sm text-center">
        <p>Danh sách câu hỏi</p>
            <p id = "time" class = "col-sm text-center"></p>
            
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-12 text-center">
              <button type="button" name="button" class="btn btn-success" id="btnStart">Bắt đầu làm bài</button>
            </div>
            <div class="col-sm-12 text-right">
              <button type="button" name="button" class="btn btn-success" id="btnNote">Xem giải thích</button>
            </div>
          </div>
          <div id="questions"> </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <button type="button" class="btn btn-warning" id="btnFinish">Nộp bài</button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3 id='score' class = "text-warning">
              </h3>
            </div>  
            <div class="col-sm-12 text-center">
              <h3 id='fail' class = "text-warning"></h3>
            </div>
            <div class="col-sm-12 text-center">
              <h3 id='mark' class = "text-warning"></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btnFinish').hide();
    $('#btnNote').hide();
  });

    var question;
    $('#btnStart').click(function(){        
            GetQuestion();
            startTimer();
            $('#btnFinish').show();
            $(this).hide();
            
    });
    

$('#btnNote').click(function() {
      window.location = "Note.php";
});

    $('#btnFinish').click(function() {
        $(this).hide();
        checkResult();
        $('#btnNote').show();
    });

    function checkResult() {  
        let mark = 0;
        let total = 11;
        let fail =  total - mark;
        let score = 0;
          $('#questions div.row').each(function(k, v){
              let id = $(v).find('h5').attr('id');
              let question = questions.find(x=>x.id == id);
              let answer = question['answer'];
              
              let choice = $(v).find('fieldset input[type="radio"]:checked').attr('class');
              if(choice == answer){  
                fail--;
                score += 2;
                mark ++ ;
              }else{
                  console.log('Câu có id: '+id+' sai');
              }
              $('#question_'+id+' > fieldset > div > label.'+answer).css("background-color", "orange") ;
          });        
          $('#fail').text('Số câu sai của bạn là : '  + fail + '/'  + total);
          $('#mark').text('Bạn đã trả lời đúng được :  ' + mark + '/' + total);
          $('#score').text('Số điểm bạn đạt được : '  + score);
    }
    

    function GetQuestion() {
      $.ajax({
    url:'PHP/questions.php',
    type:'get',
    success:function(data){
      questions = jQuery.parseJSON( data);
      let index = 1;
      let d = '';
      $.each(questions,function(k,v){
        d+=   '<div class="row" style = "margin-left:10px;" id="question_'+v['id']+'"> ';
        d+=   '<h5 style="font-weight:bold;" id="'+v['id']+'"> <span class="text-danger">Câu '+index+': </span>'+v['question']+'</h5>';
        d +=   '<fieldset>';
        d+=   '<div class="radio col-md-12 ">';
        d+=    '<label class = "A"><input type="radio" class="A" name = "'+v['id']+'"><span class="text-danger">A: </span>'+v['option_a']+'</label>';
        d+=   '</div>';
        d+=  ' <div class="radio col-md-12">';
        d+=     '<label class = "B"><input type="radio" class="B" name = "'+v['id']+'"><span class="text-danger">B: </span>'+v['option_b']+'</label>';
        d+=   '</div>';
        d+=   '<div class="radio  col-md-12">';
        d+=     '<label class = "C"><input type="radio"  class="C" name = "'+v['id']+'"><span class="text-danger">C: </span>'+v['option_c']+'</label>';
        d+=   '</div>';
        d+=   '<div class="radio col-md-12">';
        d+=     '<label class = "D"><input type="radio" class="D" name = "'+v['id']+'"><span class="text-danger">D: </span>'+v['option_d']+'</label>';
        d+=   '</div>';
        d+=  '</fieldset>';
        // d+=     '<label class = "E"><input type="hidden" class="E" name = "'+v['id']+'"><span class=""></span>'+v['ghichu'] + '</label>';
        // d+=   '</div>';
        d+=  '</fieldset>';
        d+= '</div>';
        index++;
      });
      $('#questions').html(d);
    }
  });
    }
</script>
<script src="./note.js"></script>
<script src="./maintime.js"></script>