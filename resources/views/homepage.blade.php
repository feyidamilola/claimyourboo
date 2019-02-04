<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Know Your Boo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    
  {{-- @foreach ($questions as $question)
    @foreach ($question as $individualquestion)
         <li>{{$individualquestion}}</li>
    @endforeach
@endforeach --}}
{{-- <form action="{{url('/status')}}" method="post">
    {{ csrf_field() }}
    @foreach ($questions as $key => $question)
        <input type="radio" value="{{$key}}" name="relationship"> {{$key }}
        @foreach ($questions[$key] as $value => $item)
            @if($value === 0)
                {{$item}} <br>
            @endif
        @endforeach
    @endforeach
    <input type="submit" value="submit">
</form> --}}


<form action="#" method="post">
        {{ csrf_field() }}
        <div>
            <label class="relationship">Relationship</label>
            <label class="relationship"><input type="radio" name="relationship" value="fwb"> FWB</label>
            <label class="relationship"><input type="radio" name="relationship" value="husband"> husband</label>
            <label class="relationship"><input type="radio" name="relationship" value="wife"> wife</label>
            <label class="relationship"><input type="radio" name="relationship" value="sidechick"> side chick</label>
            <label class="relationship"><input type="radio" name="relationship" value="sidedick"> side dick</label>
            <label class="relationship"><input type="radio" name="relationship" value="situationship"> situationship</label>
            <label class="relationship"><input type="radio" name="relationship" value="boyfriend"> boyfriend</label>
            <label class="relationship"><input type="radio" name="relationship" value="girlfriend"> girlfriend</label>
            <label class="relationship"><input type="radio" name="relationship" value="fuckbuddies"> fuck buddies</label>
        </div>
        <div class="fwb question">
            <div>
                <div>
                    <label for="">When you add benefits (mummy and daddy)</label>
                </div>
                <div>
                    <input type="radio" name="fwb-long" value="year3"> 3 Years
                    <input type="radio" name="fwb-long" value="year5"> 5 Years
                    <input type="radio" name="fwb-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">You don catch feelings?</label>
                </div>
                <div>
                    <input type="radio" name="fwb-feeling" value="fwb-yes"> Yes
                    <input type="radio" name="fwb-feeling" value="fwb-no"> No
                </div>
            </div>
        </div>
        <div class="husband question">
            <div>
                <div>
                    <label for="">when did he put a ring on it?</label>
                </div>
                <div>
                    <input type="radio" name="husband-long" value="year3"> 3 Years
                    <input type="radio" name="husband-long" value="year5"> 5 Years
                    <input type="radio" name="husband-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">How often do you do it?</label>
                </div>
                <div>
                    <input type="radio" name="husband-often" value="year3"> 3 Years
                    <input type="radio" name="husband-often" value="year5"> 5 Years
                    <input type="radio" name="husband-often" value="year10"> 10 Years
                </div>
            </div>
        </div>
        <div class="wife question">
            <div>
                <div>
                    <label for="">When you pay bride price?</label>
                </div>
                <div>
                    <input type="radio" name="wife-long" value="year3"> 3 Years
                    <input type="radio" name="wife-long" value="year5"> 5 Years
                    <input type="radio" name="wife-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">How often do you do it?</label>
                </div>
                <div>
                    <input type="radio" name="wife-often" value="year3"> 3 Years
                    <input type="radio" name="wife-often" value="year5"> 5 Years
                    <input type="radio" name="wife-often" value="year10"> 10 Years
                </div>
            </div>
        </div>
        <div class="sidechick question">
            <div>
                <div>
                    <label for="">When you accept second place?</label>
                </div>
                <div>
                    <input type="radio" name="sidechick-long" value="year3"> 3 Years
                    <input type="radio" name="sidechick-long" value="year5"> 5 Years
                    <input type="radio" name="sidechick-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">Your secret hookup location</label>
                </div>
                <div>
                    <input type="radio" name="sidechick-location" value="hotel"> hotel
                    <input type="radio" name="sidechick-location" value="cinema"> cinema
                    <input type="radio" name="sidechick-location" value="school"> school
                </div>
            </div>
        </div>
        <div class="sidedick question">
            <div>
                <div>
                    <label for="">When you accept second place?</label>
                </div>
                <div>
                    <input type="radio" name="sidedick-long" value="year3"> 3 Years
                    <input type="radio" name="sidedick-long" value="year5"> 5 Years
                    <input type="radio" name="sidedick-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">Your secret hookup location</label>
                </div>
                <div>
                    <input type="radio" name="sidechick-location" value="hotel"> hotel
                    <input type="radio" name="sidechick-location" value="cinema"> cinema
                    <input type="radio" name="sidechick-location" value="school"> school
                </div>
            </div>
        </div>
        <div class="situationship question">
            <div>
                <div>
                    <label for="">When confusion start?</label>
                </div>
                <div>
                    <input type="radio" name="situationship-long" value="year3"> 3 Years
                    <input type="radio" name="situationship-long" value="year5"> 5 Years
                    <input type="radio" name="situationship-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">what is holding you back?</label>
                </div>
                <div>
                    <input type="radio" name="situationship-holdback" value="family"> family
                    <input type="radio" name="situationship-holdback" value="health"> health
                    <input type="radio" name="situationship-holdback" value="religion"> religion
                </div>
            </div>
        </div>
        <div class="boyfriend question">
            <div>
                <div>
                    <label for="">When did you start dating?</label>
                </div>
                <div>
                    <input type="radio" name="boyfriend-long" value="year3"> 3 Years
                    <input type="radio" name="boyfriend-long" value="year5"> 5 Years
                    <input type="radio" name="boyfriend-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">Has he cheated before?</label>
                </div>
                <div>
                    <input type="radio" name="boyfriend-cheat" value="yes"> Yes
                    <input type="radio" name="boyfriend-cheat" value="no"> No
                </div>
            </div>
        </div>
        <div class="girlfriend question">
            <div>
                <div>
                    <label for="">When did you start dating?</label>
                </div>
                <div>
                    <input type="radio" name="girlfriend-long" value="year3"> 3 Years
                    <input type="radio" name="girlfriend-long" value="year5"> 5 Years
                    <input type="radio" name="girlfriend-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">Has she cheated before?</label>
                </div>
                <div>
                    <input type="radio" name="girlfriend-cheat" value="yes"> Yes
                    <input type="radio" name="girlfriend-cheat" value="no"> No
                </div>
            </div>
        </div>
        <div class="fuckbuddies question">
            <div>
                <div>
                    <label for="">When you don dey knack</label>
                </div>
                <div>
                    <input type="radio" name="fuckbuddies-long" value="year3"> 3 Years
                    <input type="radio" name="fuckbuddies-long" value="year5"> 5 Years
                    <input type="radio" name="fuckbuddies-long" value="year10"> 10 Years
                </div>
            </div>
            <div>
                <div>
                    <label for="">Your favorite position</label>
                </div>
                <div>
                    <input type="radio" name="fuckbuddies-position" value="doggy"> Doggy
                    <input type="radio" name="fuckbuddies-position" value="catty"> Catty
                    <input type="radio" name="fuckbuddies-position" value="snaky"> Snaky
                </div>
            </div>
        </div>
    </form>
    

    <script>
        $(document).ready(function(){
            $(".question").hide();
        });
        $("input[name=relationship]").on( "change", function() {
            var test = $(this).val();
            $(".question").hide();
            $("."+test).show();
            $(".relationship").hide();
        } );
    </script>
</body>
</html>