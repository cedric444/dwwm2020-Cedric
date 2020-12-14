function navig()
{
    var ua = navigator.userAgent;
    var x = ua.indexOf("MSIE");
    var y = 4;
    if (x==-1)
    {
        x =ua.indexOf("Firefox");
        y = 7;
        if(x==-1)
        {
            x =ua.indexOf("Chrome");
            y = 6;
            if (x ==-1)
            {
                x =ua.indexOf("Opera");
                y = 5;
                if(x == -1 )
                {
                    ua.indexOf("Safari");
                    if (x != -1)
                    {
                        x = ua.indexOf("Version");
                        y = 7;
                    }
                }
            }
        }
    }return alert(ua);
}
navig();