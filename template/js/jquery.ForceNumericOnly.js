// Numeric only control handler
jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
            return (
                key == 8 || // backspace
                key == 9 || //tab
                key == 46 || //delete
                key == 35 || // end
                key == 36 || // home
                key == 45 || // insert
                key == 16 || // shift
                key == 17 || // control
                (key >= 37 && key <= 40) || // arrows
                (key >= 48 && key <= 57) || // numbers
                (key >= 96 && key <= 105)); // numpad
        })
    })
}; 