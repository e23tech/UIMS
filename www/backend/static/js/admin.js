/**
* @author moufer<moufer@163.com>
* @copyright www.modoer.com
*/
$(document).ready(function(){
    $("table[trmouse=Y] tr").each(function(i) {
        if(!this.className && $(this).attr('mousemove')!='N') {
            $(this).mouseover( function() { this.style.background='#FFFFE8'; } );
            $(this).mouseout( function() { this.style.background='#FFF'; } );
        }
    });
});

//�ύ����Ϊ��
function submit_op(formname, act, checkname) {
    submitform(formname, 'op', act, checkname);
}

function submitform(formname, actname, act, checkname) {
	var form = $('[name='+formname+']');
    if(checkname != null) {
        if(!checkbox_check(checkname)) return;
    }
    if(act == 'delete') {
        if(!confirm('ȷ��Ҫ����ɾ��������')) return;
    }
	form.find('[name='+actname+']').val(act);
    form.submit();
}
//�滻���F5ˢ��
function resetEscAndF5(e) {
	e = e ? e : window.event;
	actualCode = e.keyCode ? e.keyCode : e.charCode;
	if(actualCode == 116 && parent.main) {
        parent.main.location.reload();
		if(document.all) {
			e.keyCode = 0;
			e.returnValue = false;
		} else {
			e.cancelBubble = true;
			e.preventDefault();
		}
	}
}
