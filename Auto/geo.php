


<br></br>
<p align="center"><img id="geoMap" src="http://maps.googleapis.com/maps/api/staticmap?center=0,0&zoom=0&size=400x200&sensor=false" alt="Equator" /></p>
Accuracy:<select name="HighAccuracyList" id="HighAccuracyList">
<option value="NULL">NULL</option>
<option value="True">True</option>
<option value="False">False</option>
</select><br />
Maximum Age[ms] :<input type="text" id="MaxAgeText" name="MaxAgeText" />
TimeOut[ms] :<input type="text" id="TimeOutText" name="TimeOutText" />

   <p><input type="button" value="getCurrentPosition with 1 args" onclick="javascript:requestLocationData(1)">
      <input type="button" value="getCurrentPosition with 2 args" onclick="javascript:requestLocationData(2)">
      <input type="button" value="getCurrentPosition with position options" onclick="javascript:requestLocationData(3)">
   <br /><p><input type="button" value="watchPosition with 1 args" onclick="javascript:requestWatchPosition(1)">
   <input type="button" value="watchPosition with 2 args" onclick="javascript:requestWatchPosition(2)">
   <input type="button" value="watchPosition with position options" onclick="javascript:requestWatchPosition(3)">
   <br /><p><input type="button" value="clearWatch" onclick="javascript:clearWatch()"></p>
   <br /><p><input type="button" value="MAP Coordinates" onclick="javascript:doMap()"></p>
   <br /><input type="button" onclick="doTime();" value="Get Time"><br>

   <div id="GpsData">GPS DATA</div><br />
   <div id="GpsError"></div><br />
   <div id="DebugMsg">DebugMsg</div><br />
   <div id="timeSpan">Current time..</div><br />


