<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Script" referent="RBX0">
		<Properties>
			<bool name="Disabled">false</bool>
			<Content name="LinkedSource"><null></null></Content>
			<string name="Name">Anti-Lag v 7.5</string>
			<ProtectedString name="Source">--Made and Designed by: lagremover2, and roboboy722--
print(&quot;Anti-Lag script v 7.5 Loaded&quot;)

while true do
local check = {&quot;Part&quot;,&quot;SpawnLocation&quot;,&quot;FlagStand&quot;,&quot;Seat&quot;,&quot;Script&quot;,&quot;Lighting&quot;,&quot;Players&quot;,&quot;Debris&quot;,&quot;NetworkServer&quot;,&quot;NetworkClient&quot;,&quot;Workspace&quot;,&quot;StarterPack&quot;}

amount=0
objects=0
lag=0
laglvl=0
pi=355/113
Expire_Time = 20
Lag_Level = 1 
waittimea = 10
mx = game.Debris
mx2 = game.Debris.MaxItems

function round(h)
  local mult=10^1
  return math.floor(h * mult + 0.5)/mult
end

function lagcount(e, f)
	laglvl=e/225
	laglvl=laglvl+f/1000
	laglvl=laglvl+game.Players.MaxPlayers/5
	laglvl=round(laglvl)
end

function looking(a)
	local b=a:GetChildren()
	for c=1, #b do
		local d=b[c]
		if d~=nil then
			if d.className==&quot;Part&quot; or d.className==&quot;Seat&quot; or d.className==&quot;SpawnLocation&quot; then
				objects=objects+1
				looking(d)
				howmuch(d)
			elseif d.className==&quot;SpecialMesh&quot; then
				looking(d)
				lag=lag+2
			elseif d.className==&quot;Script&quot; then
				looking(d)
				lag=lag+2
			else
				looking(d)
			end
		end
	end
end

function howmuch(a)
	local aS=a.Size
	if a.Anchored==false then
		lag=lag+1
	end
	if a.Shape==Enum.PartType.Block then
		amount=amount+(aS.x*aS.y*aS.z)
	else
		local r=aS.x/2
		amount=amount+(4*pi*r*r*r/3)
	end
end

looking(game.Workspace)
lagcount(lag, objects)

local function runCheck(class)
	for i = 1, #check do
		if check[i]:lower() == false then return false end 
                else if check[i]:lower() == true then

settings().Network.PhysicsReplicationUpdateRate = 1000

game.Players.ChildAdded:connect(function(p)
	local s = Instance.new(&quot;LocalScript&quot;)
	s.Source = &quot;settings().Network.PhysicsReplicationUpdateRate = 1000 settings().Network.PhysicsReceive = 0&quot;
	s.Parent = p.Backpack
end) 

 if laglvl&gt;5 then
     if game.Players.MaxPlayes/5&gt;3 then
           game.Players.Character:FindFirstChild(&quot;Animate&quot;)
           wait(3)
           game.Players.Character.Animate:remove()
           elseif lag/225&gt;3 then
           function PartMade(newPart)

if newPart.className == &quot;Part&quot; or newPart.className == &quot;Seat&quot; then  -- check to see if what was entered into the workspace is a part

print(&quot;Converting &quot; .. newPart.Name .. &quot;...&quot;)

wait(3)

if newPart ~= nil then

print(newPart.Name .. &quot; is set to expire after &quot; .. Expire_Time*Lag_Level .. &quot; seconds...&quot;)
game:GetService(&quot;Debris&quot;):AddItem(newPart, Expire_Time*Lag_Level) --- set the part to expire

else

print(&quot;Failed to Convert...&quot;)

end

else

print(&quot;Unknown Format &apos;&quot; .. newPart.className .. &quot;&apos;&quot;)

wait(2)

print(&quot;Failed to Convert...&quot;)

end

end

wait(0.01)
c = game.Workspace:GetChildren()
print(#c)
for i = 1,#c do 
g = c[i]:GetChildren()
for i = 1,#g do 
if g[i].Name == &quot;Anti-Lag&quot; then
g[i]:remove()
if g[i].className == &quot;Model&quot; then
cc = g[i]:GetChildren()
for i = 1,#cc do 
if cc[i].Name == &quot;Anti-Lag&quot; then
cc[i]:remove()
end
gf = cc[i]:GetChildren()
for i = 1,#gf do
if gf[i].Name == &quot;Anti-Lag&quot; then
gf[i]:remove()
end
print(&quot;one dead&quot;)
end 
end 
end
end 
end
end 
wait(0.01)
print(&quot;starting &apos;&apos;Infecting&apos;&apos; script killer&quot;)
c = game.Workspace:GetChildren()
print(#c)
for i = 1,#c do 
g = c[i]:GetChildren()
for i = 1,#g do 
if g[i].Name == &quot;Infected&quot; and g[i].className == &quot;Script&quot;  then
g[i]:remove()
if g[i].className == &quot;Model&quot; and g[i].className == &quot;Script&quot;  then
cc = g[i]:GetChildren()
for i = 1,#cc do 
if cc[i].Name == &quot;Infected&quot; and cc[i].className == &quot;Script&quot;  then
cc[i]:remove()
end
gf = cc[i]:GetChildren()
for i = 1,#gf do
if gf[i].Name == &quot;Infected&quot; and gf[i].className == &quot;Script&quot; then
gf[i]:remove()
end
print(&quot;one dead&quot;)
end 
end 
end
end 
end
end 
wait(0.01)
print(&quot;starting &apos;&apos;Infecting&apos;&apos; script killer&quot;)
c = game.Workspace:GetChildren()
print(#c)
for i = 1,#c do 
g = c[i]:GetChildren()
for i = 1,#g do 
if g[i].Name == &quot;Zombified&quot; and g[i].className == &quot;Script&quot;  then
g[i]:remove()
if g[i].className == &quot;Model&quot; and g[i].className == &quot;Script&quot;  then
cc = g[i]:GetChildren()
for i = 1,#cc do 
if cc[i].Name == &quot;Zombified&quot; and cc[i].className == &quot;Script&quot;  then
cc[i]:remove()
end
gf = cc[i]:GetChildren()
for i = 1,#gf do
if gf[i].Name == &quot;Zombified&quot; and gf[i].className == &quot;Script&quot; then
gf[i]:remove()
end
print(&quot;one dead&quot;)
end 
end 
end
end 
end
end 
print(&quot;Dead scripts&quot;)
end  

local search = {&quot;NetworkServer&quot;}

local function run search(NetworkServer)
	for i = 1, #search do
		if search[i]:lower() == false then return false end 
                else if search[i]:lower() == true then
                         game.Players.MaxPlayers = 4
                          else 
                          game.Players.MaxPlayers = 2
                          end

local searchh = {&quot;NetworkClient&quot;}

local function run searchh(NetworkClient)
	for i = 1, #searchh do
		if searchh[i]:lower() == false then return false end 
                else if searchh[i]:lower() == true then
                         game.Players.MaxPlayers = 4
                          else 
                          game.Players.MaxPlayers = 2
                          end

if (mx.MaxItems &gt; 2000) then
	mx.MaxItems = mx2*4000
end

local ps = print(&quot;&quot;...)
wait(1)
local function run ps(print)
        for i = 1, #ps do
                if ps[i]:lower() == false then return false end
                elseif ps[i]:lower() == true then
                ps.waittimea:remove()
                if false then
                wait(10)
                ps:remove()
                end
end
--Made and Designed by: lagremover2, and roboboy722--



























                 </ProtectedString>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Script" referent="RBX1">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name"></string>
				<ProtectedString name="Source">--Made and Designed by: lagremover2, and roboboy722--

while true do 
H = Instance.new(&quot;Hint&quot;) 
H.Parent = game.Workspace 
H.Text = &quot;The maker of this map thanks lagremover2,and roboboy722 for his Anti-Lag/Virus script [V-7.5]&quot;
wait(5) 
H.Text = &quot;lagremover2&apos;s anti lag scripts literally determine how much lag you have and then&quot; 
wait(5) 
H.Text = &quot;find the appropriate way to get rid of it! His scripts even get rid of the virus&apos;s!&quot; 
wait(5) 
H.Text = &quot;This place is currently using lagremover2&apos;s Anti-Lag script [V-7.5]&quot; 
wait(5)
H:remove()
end 

--Made and Designed by: lagremover2, and roboboy722--

</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


