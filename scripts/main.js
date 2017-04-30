// from http://stackoverflow.com/questions/19462672/jquery-detect-bootstrap-3-state
function findBootstrapEnvironment() {
    var envs = ["ExtraSmall", "Small", "Medium", "Large"];
    var envValues = ["xs", "sm", "md", "lg"];

    var $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envValues.length - 1; i >= 0; i--) {
        var envVal = envValues[i];

        $el.addClass('hidden-'+envVal);
        if ($el.is(':hidden')) {
            $el.remove();
            return envValues[i]
        }
    };
}

function getperrow() {
  var size = findBootstrapEnvironment();
  if( size === 'xs' ) {
      return 2;
  }
  if( size === 'sm' ) {
      return 3;
  }
  if( size === 'md' ) {
      return 4;
  }
  if( size === 'lg' ) {
      return 6;
  }
}

function collapseAllBut(ref, total) {
  $.ajax({
    url: "ajax/member_detail.php",
    method: 'POST',
    data: {id: ref},
    cache: false,
    dataType: 'json',
    error: function(error) {
      console.log(error);
    }
  })
  .done(function(result) {
    console.log(result);
    var perrow = getperrow();
    var after = Math.min((Math.floor(ref/perrow)+1)*perrow-1, total);
    if ($('.member-detail').data('id') == ref) {
      $('.member-detail').remove();
    } else {
      $('.member-detail').remove();
      var content = "<div class='member-detail' data-id='"+ref+"'><div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 bio-section' aria-expanded='true'><p class='member-detail-h2'>"+result['name']+" | "+result['position']+"</p><p class='member-detail-h4'>Team: "+result['team']+"<br>Major: "+result['major']+"</p><p class='member-detail-p'>"+result['description']+"</p></div></div>";
      $('#bioholder_'+after).append(content);
    }
  });
}
