function enableAtributesEdit()
{
    var commit = $('#commit-changes');
    if(commit.is(':disabled'))
    {
        commit.removeAttr("disabled");
    }
    else //se estiver habilitado
    {
        commit.attr("disabled", "disabled");
    }
    $("#user-info-form input, #user-info-form select").each(
        function()
        {
            var input = $(this);
            //se estiver desabilitado
            if(input.is(':disabled'))
            {
                input.removeAttr("disabled");
            }
            else //se estiver habilitado
            {
                input.attr("disabled", "disabled");
            }
        }
    );
}
