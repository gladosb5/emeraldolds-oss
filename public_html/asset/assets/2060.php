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
			<string name="Name">Gears</string>
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
				<string name="Name">Model</string>
				<Ref name="PrimaryPart">null</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Tool" referent="RBX2">
				<Properties>
					<bool name="Enabled">true</bool>
					<CoordinateFrame name="Grip">
						<X>-1.5</X>
						<Y>-0</Y>
						<Z>-0</Z>
						<R00>-0.857593954</R00>
						<R01>-0.424244016</R01>
						<R02>0.290774167</R02>
						<R10>-0.514327347</R10>
						<R11>0.707406878</R11>
						<R12>-0.48481223</R12>
						<R20>-1.6957918e-005</R20>
						<R21>-0.565325141</R21>
						<R22>-0.824868143</R22>
					</CoordinateFrame>
					<string name="Name">RedStratobloxxer</string>
					<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=10504683</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="SpecialMesh" referent="RBX3">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=1088207</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Note</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>0.100000001</X>
							<Y>0.100000001</Y>
							<Z>0.100000001</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=1088099</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Script" referent="RBX4">
					<Properties>
						<bool name="Disabled">true</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">RocketScript</string>
						<ProtectedString name="Source">shaft = script.Parent




note = script.Parent.chord
note:play()

wait(5)

-- at max range
--script.Parent.Explosion.PlayOnRemove = false
note:stop()
shaft:remove()</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="LocalScript" referent="RBX5">
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
	--mouse.Icon = &quot;rbxasset://textures\\GunWaitCursor.png&quot;

	--wait(7)
	--mouse.Icon = &quot;rbxasset://textures\\GunCursor.png&quot;
	enabled = true

end

function Message(text)

	-- kill all existing
	local c = game.Players.LocalPlayer:GetChildren()
	
	for i=1,#c do
		if (c[i].className == &quot;Message&quot;) then
			c[i]:Remove()
		end
	end


	local m = Instance.new(&quot;Message&quot;)
	m.Text = text
	m.Parent = game.Players.LocalPlayer
	wait(1)
	m:Remove()
end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;http://www.emeraldolds.glados.pro/asset?id=1088199&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
	mouse.KeyDown:connect(onKeyDown) 
end


Tool.Equipped:connect(onEquippedLocal)


function onKeyDown(key) 
	if (key~=nil) then 
		local key = key:lower() 
		if (key==&quot;f&quot;) then 
			Tool.mode.Value=1
			coroutine.resume(coroutine.create(Message),&quot;I Chord&quot;)
		elseif (key==&quot;k&quot;) then
			Tool.mode.Value=2
			coroutine.resume(coroutine.create(Message),&quot;IV Chord&quot;)
		elseif (key==&quot;h&quot;) then
			Tool.mode.Value=3
			coroutine.resume(coroutine.create(Message),&quot;V Chord&quot;)
		elseif (key==&quot;j&quot;) then
			Tool.mode.Value=4
			coroutine.resume(coroutine.create(Message),&quot;V-VII Transition&quot;)
		elseif (key==&quot;g&quot;) then
			Tool.mode.Value=5
			coroutine.resume(coroutine.create(Message),&quot;I-VII Transition&quot;)
		elseif (key==&quot;l&quot;) then
			Tool.mode.Value=6
			coroutine.resume(coroutine.create(Message),&quot;III Chord&quot;)
		end
	end
end

--[[function pm(x)

	if game.Players:findFirstChild(script.Parent.Parent.Name)~=nil then
		local bob=game.Players:findFirstChild(script.Parent.Parent.Name)
		local mess=Instance.new(&quot;Message&quot;)
		while bob:findFirstChild(&quot;Message&quot;)~=nil do bob.Message:remove() end
		mess.Parent=bob
		if x==1 then
			mess.Text=&quot;I Chord&quot;
		elseif x==2 then
			mess.Text=&quot;IV Chord&quot;
		elseif x==3 then
			mess.Text=&quot;V Chord&quot;
		elseif x==4 then
			mess.Text=&quot;V-VII Transition&quot;
		elseif x==5 then
			mess.Text=&quot;I-VII Transition&quot;
		elseif x==6 then
			mess.Text=&quot;III Chord&quot;
		end
		wait(1)
		mess.Parent=nil
	end
end]]

function Leap()
wait(0.25)--Might want to change this
script.Parent.GripForward = Vector3.new(-0,-0,1)
script.Parent.GripPos = Vector3.new(-1, 0, 0)
script.Parent.GripRight = Vector3.new(-1, 0, 0)
script.Parent.GripUp = Vector3.new(0, 1, 0)
wait(0.75)--Might want to change this also...
script.Parent.GripForward = Vector3.new(-0.291, 0.485, 0.825)
script.Parent.GripPos = Vector3.new(-1.5, 0, 0)
script.Parent.GripRight = Vector3.new(-0.857, -0.514, 0)
script.Parent.GripUp = Vector3.new(-0.424, 0.707, -0.565)
end

script.Parent.Parent.Humanoid.Jumping:connect(Leap)</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="IntValue" referent="RBX6">
					<Properties>
						<string name="Name">mode</string>
						<int name="Value">5</int>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX7">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Ichord</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=1089403</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX8">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">IIIchord</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=1089404</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX9">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">IVIIchord</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=1089405</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX10">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">IVchord</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=1089406</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX11">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">VVIIchord</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=1089410</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX12">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">Vchord</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=1089407</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Script" referent="RBX13">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Local Launcher</string>
						<ProtectedString name="Source">local Rocket = Instance.new(&quot;Part&quot;)
local Tool = script.Parent
local vel = Instance.new(&quot;BodyVelocity&quot;)

vel.Parent = Rocket

Rocket.Locked = true
Rocket.Size = Vector3.new(1,1,1)
Rocket.BrickColor = BrickColor.new(26)

Rocket.CanCollide = false

Tool.Note:clone().Parent = Rocket
Tool.RocketScript:clone().Parent = Rocket
--Tool.Explosion:clone().Parent = Rocket
--Tool.Swoosh:clone().Parent = Rocket


function fire(vTarget)

	local vCharacter = Tool.Parent;
	
	local vHandle = Tool:findFirstChild(&quot;Handle&quot;)
	if vHandle == nil then
		print(&quot;Handle not found&quot;)
		return 
	end

	local chord = Tool.Ichord:clone()

	if (Tool.mode.Value==1) then
		chord = Tool.Ichord:clone()
	elseif (Tool.mode.Value==2) then
		chord = Tool.IVIIchord:clone()
	elseif (Tool.mode.Value==3) then
		chord = Tool.Vchord:clone()
	elseif (Tool.mode.Value==4) then
		chord = Tool.VVIIchord:clone()
	elseif (Tool.mode.Value==5) then
		chord = Tool.IVchord:clone()
	elseif (Tool.mode.Value==6) then
		chord = Tool.IIIchord:clone()
	end
	
	chord.Name = &quot;chord&quot;

	local dir = Vector3.new(math.random()-.5, 1, math.random() - .5).unit

	local missile = Rocket:clone()

	chord.Parent = missile

	local pos = vHandle.Position + Vector3.new(0, 5 ,0)
	
	--missile.Position = pos
	missile.CFrame = CFrame.new(pos,  pos + dir)

	missile.BodyVelocity.velocity = dir * 30

	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	if vPlayer == nil then
		print(&quot;Player not found&quot;)
	end	
	missile.RocketScript.Disabled = false
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

	fire(targetPos)

	Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)

</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
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
						<int name="BrickColor">194</int>
						<CoordinateFrame name="CFrame">
							<X>14.5</X>
							<Y>16.9908695</Y>
							<Z>2819.5</Z>
							<R00>5.96046448e-008</R00>
							<R01>2.10977875e-018</R01>
							<R02>-0.99999994</R02>
							<R10>3.0279577e-019</R10>
							<R11>-0.999999881</R11>
							<R12>-2.10977875e-018</R12>
							<R20>-0.99999994</R20>
							<R21>-3.0279577e-019</R21>
							<R22>5.96046448e-008</R22>
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
						<string name="Name">Handle</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>1.12750911e-018</X>
							<Y>-7.77777574e-021</Y>
							<Z>7.90776807e-018</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-4.77793543e-018</X>
							<Y>0.000684591942</Y>
							<Z>6.43542174e-019</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>5</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX15">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=1082816</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=10504421</url></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Camera" referent="RBX16">
					<Properties>
						<Ref name="CameraSubject">null</Ref>
						<token name="CameraType">0</token>
						<CoordinateFrame name="CoordinateFrame">
							<X>5.50208712</X>
							<Y>3.53698158</Y>
							<Z>2.93323016</Z>
							<R00>0.437434077</R00>
							<R01>-0.408564746</R01>
							<R02>0.8010782</R02>
							<R10>3.54051011e-009</R10>
							<R11>0.890828788</R11>
							<R12>0.454339176</R12>
							<R20>-0.899250507</R20>
							<R21>-0.198743433</R21>
							<R22>0.389678866</R22>
						</CoordinateFrame>
						<CoordinateFrame name="Focus">
							<X>0.5</X>
							<Y>0.699999928</Y>
							<Z>0.5</Z>
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
						<string name="Name">ThumbnailCamera</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Tool" referent="RBX17">
				<Properties>
					<bool name="Enabled">true</bool>
					<CoordinateFrame name="Grip">
						<X>0.100000001</X>
						<Y>0</Y>
						<Z>0.100000001</Z>
						<R00>0.217036352</R00>
						<R01>0</R01>
						<R02>0.976163507</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>-0</R12>
						<R20>-0.976163507</R20>
						<R21>0</R21>
						<R22>0.217036352</R22>
					</CoordinateFrame>
					<string name="Name">SlateskinPotion</string>
					<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=11448091</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Part" referent="RBX18">
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
						<int name="BrickColor">1002</int>
						<CoordinateFrame name="CFrame">
							<X>14.4377337</X>
							<Y>16.9915695</Y>
							<Z>2828.5</Z>
							<R00>1</R00>
							<R01>2.90839853e-006</R01>
							<R02>4.56838752e-005</R02>
							<R10>-2.90833486e-006</R10>
							<R11>1</R11>
							<R12>-1.39753513e-006</R12>
							<R20>-4.56838825e-005</R20>
							<R21>1.39740234e-006</R21>
							<R22>1</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Handle</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>-0.0039867512</X>
							<Y>0.00227490417</Y>
							<Z>0.00204290263</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">9.99999975e-005</float>
						<Vector3 name="Velocity">
							<X>0.00123624003</X>
							<Y>-0.00758981425</Y>
							<Z>-0.00416563964</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>1.20000005</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX19">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=11409474</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1.5</X>
								<Y>1.5</Y>
								<Z>1.5</Z>
							</Vector3>
							<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=11445640</url></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX20">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-4.71828389e-006</X>
								<Y>-1.06949216e-007</Y>
								<Z>6.73912837e-008</Z>
								<R00>-1.96380037e-010</R00>
								<R01>-7.15101578e-006</R01>
								<R02>1</R02>
								<R10>-3.45956111e-011</R10>
								<R11>1</R11>
								<R12>9.53468771e-006</R12>
								<R20>-1</R20>
								<R21>4.01852024e-011</R21>
								<R22>-2.64911593e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.71828389e-006</X>
								<Y>-1.06949216e-007</Y>
								<Z>6.73912837e-008</Z>
								<R00>-1.96380037e-010</R00>
								<R01>-7.15101578e-006</R01>
								<R02>1</R02>
								<R10>-3.45956111e-011</R10>
								<R11>1</R11>
								<R12>9.53468771e-006</R12>
								<R20>-1</R20>
								<R21>4.01852024e-011</R21>
								<R22>-2.64911593e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX21">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-1.34138972e-007</X>
								<Y>-6.91051537e-006</Y>
								<Z>0</Z>
								<R00>-3.91537502e-021</R00>
								<R01>0.999999106</R01>
								<R02>-0.00133771845</R02>
								<R10>2.81109586e-022</R10>
								<R11>0.00133771845</R11>
								<R12>0.999999106</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.34138972e-007</X>
								<Y>-6.91051537e-006</Y>
								<Z>0</Z>
								<R00>-3.91537502e-021</R00>
								<R01>0.999999106</R01>
								<R02>-0.00133771845</R02>
								<R10>2.81109586e-022</R10>
								<R11>0.00133771845</R11>
								<R12>0.999999106</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX22">
						<Properties>
							<CoordinateFrame name="C0">
								<X>3.64912034e-006</X>
								<Y>-1.13236744e-007</Y>
								<Z>-2.01656292e-008</Z>
								<R00>-7.08486672e-011</R00>
								<R01>0.000798657886</R01>
								<R02>-0.999999702</R02>
								<R10>1.55140234e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000793890678</R12>
								<R20>1</R20>
								<R21>1.55083765e-010</R21>
								<R22>7.09721865e-011</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.64912034e-006</X>
								<Y>-1.13236744e-007</Y>
								<Z>-2.01656292e-008</Z>
								<R00>-7.08486672e-011</R00>
								<R01>0.000798657886</R01>
								<R02>-0.999999702</R02>
								<R10>1.55140234e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000793890678</R12>
								<R20>1</R20>
								<R21>1.55083765e-010</R21>
								<R22>7.09721865e-011</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX23">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.6321755e-007</X>
								<Y>3.49538391e-006</Y>
								<Z>0</Z>
								<R00>-3.9252309e-021</R00>
								<R01>0.996502578</R01>
								<R02>-0.0835621059</R02>
								<R10>-4.1799742e-023</R10>
								<R11>0.0835621059</R11>
								<R12>0.996502578</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.6321755e-007</X>
								<Y>3.49538391e-006</Y>
								<Z>0</Z>
								<R00>-3.9252309e-021</R00>
								<R01>0.996502578</R01>
								<R02>-0.0835621059</R02>
								<R10>-4.1799742e-023</R10>
								<R11>0.0835621059</R11>
								<R12>0.996502578</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX24">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX25">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533214211</X>
								<Y>4.09488493e-005</Y>
								<Z>-0.399536163</Z>
								<R00>-6.19143847e-010</R00>
								<R01>0.000817726948</R01>
								<R02>-0.999999702</R02>
								<R10>8.15887191e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791507307</R12>
								<R20>1</R20>
								<R21>8.10171485e-010</R21>
								<R22>1.58504349e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX26">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.12273511e-007</X>
								<Y>2.60849974e-005</Y>
								<Z>-0.533189535</Z>
								<R00>1</R00>
								<R01>8.50161941e-010</R01>
								<R02>3.96162853e-010</R02>
								<R10>8.3357371e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000782926101</R12>
								<R20>3.96190469e-010</R20>
								<R21>-0.000809622463</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX27">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533214211</X>
								<Y>0.373362005</Y>
								<Z>-4.18045545e-008</Z>
								<R00>-6.20301976e-010</R00>
								<R01>0.000817726948</R01>
								<R02>-0.999999702</R02>
								<R10>8.56068161e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791507307</R12>
								<R20>1</R20>
								<R21>8.50351511e-010</R21>
								<R22>1.59694272e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX28">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-5.43287024e-006</X>
								<Y>0.132771105</Y>
								<Z>0.400390655</Z>
								<R00>8.48401349e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000774821616</R02>
								<R10>-6.20273943e-010</R10>
								<R11>0.000801041257</R11>
								<R12>-0.999999702</R12>
								<R20>-1</R20>
								<R21>-8.37917902e-010</R21>
								<R22>-1.59147528e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX29">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.92850495e-006</X>
								<Y>-0.400390595</Y>
								<Z>-0.132823572</Z>
								<R00>8.56068161e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791507307</R02>
								<R10>-1</R10>
								<R11>-8.50351511e-010</R11>
								<R12>-1.59694272e-010</R12>
								<R20>6.20301976e-010</R20>
								<R21>-0.000817726948</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX30">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.20404536e-007</X>
								<Y>1.7940567e-005</Y>
								<Z>0.132805407</Z>
								<R00>-1</R00>
								<R01>-8.50140069e-010</R01>
								<R02>-4.23447666e-010</R02>
								<R10>8.50476911e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000781972543</R12>
								<R20>-4.22769625e-010</R20>
								<R21>0.000810576021</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX31">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.96581813e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.9335953</Z>
								<R00>8.14806722e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000780701288</R02>
								<R10>1</R10>
								<R11>8.50112314e-010</R11>
								<R12>4.58008492e-010</R12>
								<R20>-4.58215271e-010</R20>
								<R21>0.000811847276</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX32">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.33017072e-005</X>
								<Y>-0.933604836</Y>
								<Z>0.400390595</Z>
								<R00>8.35977676e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791507307</R02>
								<R10>6.19722884e-010</R10>
								<R11>-0.000817726948</R11>
								<R12>0.999999702</R12>
								<R20>1</R20>
								<R21>8.30261526e-010</R21>
								<R22>1.59099317e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX33">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.52226988e-007</X>
								<Y>-0.373301029</Y>
								<Z>-0.533214867</Z>
								<R00>1</R00>
								<R01>7.91847865e-010</R01>
								<R02>5.28903865e-010</R02>
								<R10>9.18089604e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000778158777</R12>
								<R20>2.51818288e-010</R20>
								<R21>-0.000804378418</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX34">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533214211</X>
								<Y>4.09488493e-005</Y>
								<Z>-0.400390595</Z>
								<R00>6.19143847e-010</R00>
								<R01>-0.000817726948</R01>
								<R02>0.999999702</R02>
								<R10>8.15887191e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791507307</R12>
								<R20>-1</R20>
								<R21>-8.10171485e-010</R21>
								<R22>-1.58504349e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX35">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.85732619e-008</X>
								<Y>1.708794e-006</Y>
								<Z>-0.933600962</Z>
								<R00>1</R00>
								<R01>2.30016242e-010</R01>
								<R02>-1.24190033e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000801041722</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.000808192533</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX36">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX37">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533207953</X>
								<Y>4.02465412e-005</Y>
								<Z>-0.399536252</Z>
								<R00>-4.0660561e-010</R00>
								<R01>0.997998893</R01>
								<R02>0.0632319078</R02>
								<R10>3.50466517e-010</R10>
								<R11>-0.0632200092</R11>
								<R12>0.997999609</R12>
								<R20>1</R20>
								<R21>3.27715632e-011</R21>
								<R22>3.47643969e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX38">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.86806875e-007</X>
								<Y>4.67300815e-005</Y>
								<Z>-0.533184648</Z>
								<R00>1</R00>
								<R01>-6.89996116e-010</R01>
								<R02>1.27482458e-009</R02>
								<R10>1.29899103e-009</R10>
								<R11>-0.0631971732</R11>
								<R12>0.998001099</R12>
								<R20>6.08729123e-010</R20>
								<R21>-0.997998476</R21>
								<R22>-0.0632380918</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX39">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533224404</X>
								<Y>0.373393357</Y>
								<Z>-3.90072529e-007</Z>
								<R00>-8.32836911e-010</R00>
								<R01>0.997998118</R01>
								<R02>0.0632461831</R02>
								<R10>1.32148736e-009</R10>
								<R11>-0.0632057413</R11>
								<R12>0.998000562</R12>
								<R20>1</R20>
								<R21>-4.5400067e-010</R21>
								<R22>1.28977651e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX40">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.24499784e-005</X>
								<Y>0.132795051</Y>
								<Z>0.400390744</Z>
								<R00>3.829842e-010</R00>
								<R01>-0.0632033572</R01>
								<R02>0.998000681</R02>
								<R10>-4.07727963e-010</R10>
								<R11>0.997999966</R11>
								<R12>0.0632152557</R12>
								<R20>-1</R20>
								<R21>-3.03974276e-011</R21>
								<R22>-3.75296128e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX41">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>9.7206248e-006</X>
								<Y>-0.400390506</Y>
								<Z>-0.132816374</Z>
								<R00>3.90647487e-010</R00>
								<R01>-0.0632200092</R01>
								<R02>0.997999609</R02>
								<R10>-1</R10>
								<R11>-2.90755128e-011</R11>
								<R12>-3.87671339e-010</R12>
								<R20>4.07763739e-010</R20>
								<R21>-0.997998893</R21>
								<R22>-0.0632319078</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX42">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.12741731e-007</X>
								<Y>1.47659775e-005</Y>
								<Z>0.132799253</Z>
								<R00>-1</R00>
								<R01>2.34150421e-010</R01>
								<R02>-3.70997927e-010</R02>
								<R10>3.85058263e-010</R10>
								<R11>-0.0632104948</R11>
								<R12>0.998000264</R12>
								<R20>-2.10228071e-010</R20>
								<R21>0.99799931</R21>
								<R22>0.0632247701</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX43">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.39694889e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.933587611</Z>
								<R00>3.49388324e-010</R00>
								<R01>-0.0632092282</R01>
								<R02>0.998000324</R02>
								<R10>1</R10>
								<R11>-2.68642109e-010</R11>
								<R12>3.68813091e-010</R12>
								<R20>-2.45674314e-010</R20>
								<R21>0.997999251</R21>
								<R22>0.0632260367</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX44">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>9.72479302e-006</X>
								<Y>-0.933596671</Y>
								<Z>0.400390506</Z>
								<R00>3.70557002e-010</R00>
								<R01>-0.0632200092</R01>
								<R02>0.997999609</R02>
								<R10>4.07184675e-010</R10>
								<R11>-0.997998893</R11>
								<R12>-0.0632319078</R12>
								<R20>1</R20>
								<R21>3.09235346e-011</R21>
								<R22>3.67657654e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX45">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-9.38037488e-008</X>
								<Y>-0.37332812</Y>
								<Z>-0.533202708</Z>
								<R00>1</R00>
								<R01>-3.35761835e-010</R01>
								<R02>3.06237286e-010</R02>
								<R10>4.52671733e-010</R10>
								<R11>-0.0632066876</R11>
								<R12>0.998000503</R12>
								<R20>3.92738446e-011</R20>
								<R21>-0.997999728</R21>
								<R22>-0.0632185861</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX46">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533207953</X>
								<Y>4.02465412e-005</Y>
								<Z>-0.400390506</Z>
								<R00>4.0660561e-010</R00>
								<R01>-0.997998893</R01>
								<R02>-0.0632319078</R02>
								<R10>3.50466517e-010</R10>
								<R11>-0.0632200092</R11>
								<R12>0.997999609</R12>
								<R20>-1</R20>
								<R21>-3.27715632e-011</R21>
								<R22>-3.47643969e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX47">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-7.07679817e-008</X>
								<Y>2.65414451e-006</Y>
								<Z>-0.933581531</Z>
								<R00>1</R00>
								<R01>1.09589553e-010</R01>
								<R02>2.37319969e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>-0.0632223934</R11>
								<R12>0.997999489</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.997999012</R21>
								<R22>-0.0632295236</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX48">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX49">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533212543</X>
								<Y>4.33809255e-005</Y>
								<Z>-0.399536133</Z>
								<R00>-4.77452022e-010</R00>
								<R01>0.000812952989</R01>
								<R02>-0.999999702</R02>
								<R10>5.0560689e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000796274282</R12>
								<R20>1</R20>
								<R21>5.00004205e-010</R21>
								<R22>1.65627564e-011</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX50">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.3357552e-007</X>
								<Y>5.55160077e-005</Y>
								<Z>-0.533165157</Z>
								<R00>1</R00>
								<R01>1.7806564e-009</R01>
								<R02>8.21978263e-010</R02>
								<R10>1.76440684e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000768627622</R12>
								<R20>8.21264445e-010</R20>
								<R21>-0.000823920942</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX51">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533225417</X>
								<Y>0.37339133</Y>
								<Z>-1.62893741e-007</Z>
								<R00>-1.04536846e-009</R00>
								<R01>0.000832025486</R01>
								<R02>-0.999999821</R02>
								<R10>1.78690496e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000777208828</R12>
								<R20>1</R20>
								<R21>1.78084936e-009</R21>
								<R22>5.85509641e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX52">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.40306758e-006</X>
								<Y>0.132771388</Y>
								<Z>0.400390655</Z>
								<R00>8.48401349e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000774823886</R02>
								<R10>-6.20273943e-010</R10>
								<R11>0.000801038579</R11>
								<R12>-0.999999702</R12>
								<R20>-1</R20>
								<R21>-8.37917902e-010</R21>
								<R22>-1.59147542e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX53">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.28626851e-007</X>
								<Y>-0.400390595</Y>
								<Z>-0.13282387</Z>
								<R00>8.56068161e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791509985</R02>
								<R10>-1</R10>
								<R11>-8.50351511e-010</R11>
								<R12>-1.59694299e-010</R12>
								<R20>6.20301976e-010</R20>
								<R21>-0.000817724678</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX54">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.20785018e-007</X>
								<Y>3.03727884e-005</Y>
								<Z>0.132775158</Z>
								<R00>-1</R00>
								<R01>-8.50140069e-010</R01>
								<R02>-4.23447694e-010</R02>
								<R10>8.50476911e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000781978946</R12>
								<R20>-4.22769625e-010</R20>
								<R21>0.000810569618</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX55">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>6.63429382e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.933595598</Z>
								<R00>8.14806722e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000780706818</R02>
								<R10>1</R10>
								<R11>8.50112369e-010</R11>
								<R12>4.58008492e-010</R12>
								<R20>-4.58215271e-010</R20>
								<R21>0.000811841746</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX56">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.15904674e-005</X>
								<Y>-0.933605134</Y>
								<Z>0.400390595</Z>
								<R00>8.35977676e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791509985</R02>
								<R10>6.19722884e-010</R10>
								<R11>-0.000817724678</R11>
								<R12>0.999999702</R12>
								<R20>1</R20>
								<R21>8.30261526e-010</R21>
								<R22>1.59099331e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX57">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.52702455e-007</X>
								<Y>-0.373297483</Y>
								<Z>-0.533215165</Z>
								<R00>1</R00>
								<R01>7.91847865e-010</R01>
								<R02>5.28903921e-010</R02>
								<R10>9.18089604e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000778160116</R12>
								<R20>2.51818288e-010</R20>
								<R21>-0.000804377254</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX58">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533214509</X>
								<Y>4.16217954e-005</Y>
								<Z>-0.400390595</Z>
								<R00>6.19143847e-010</R00>
								<R01>-0.000817724678</R01>
								<R02>0.999999702</R02>
								<R10>8.15887191e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791509985</R12>
								<R20>-1</R20>
								<R21>-8.10171485e-010</R21>
								<R22>-1.58504362e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX59">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.86851866e-008</X>
								<Y>1.33582325e-005</Y>
								<Z>-0.93360126</Z>
								<R00>1</R00>
								<R01>2.30016242e-010</R01>
								<R02>-1.24190033e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000801045971</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.000808193639</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX60">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX61">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533207655</X>
								<Y>4.00506069e-005</Y>
								<Z>-0.399536133</Z>
								<R00>-2.64911593e-010</R00>
								<R01>0.997566879</R01>
								<R02>-0.069715552</R02>
								<R10>4.01852024e-011</R10>
								<R11>0.0697179288</R11>
								<R12>0.9975667</R12>
								<R20>1</R20>
								<R21>1.98314268e-010</R21>
								<R22>2.08188033e-011</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX62">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.09776021e-007</X>
								<Y>5.64174661e-005</Y>
								<Z>-0.533183694</Z>
								<R00>1</R00>
								<R01>-5.1479393e-010</R01>
								<R02>1.35508649e-009</R02>
								<R10>1.29899103e-009</R10>
								<R11>0.0697455108</R11>
								<R12>0.997564793</R12>
								<R20>6.08729123e-010</R20>
								<R21>-0.997567654</R21>
								<R22>0.0697046071</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX63">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.53322345</X>
								<Y>0.373397857</Y>
								<Z>-4.03579065e-007</Z>
								<R00>-8.32836911e-010</R00>
								<R01>0.997568309</R01>
								<R02>-0.0696965307</R02>
								<R10>1.32148736e-009</R10>
								<R11>0.0697369501</R11>
								<R12>0.997565389</R12>
								<R20>1</R20>
								<R21>-2.78900597e-010</R21>
								<R22>1.33860167e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX64">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-9.81253652e-006</X>
								<Y>0.132794693</Y>
								<Z>0.400390744</Z>
								<R00>3.829842e-010</R00>
								<R01>0.0697393268</R01>
								<R02>0.99756521</R02>
								<R10>-4.07727963e-010</R10>
								<R11>0.997566044</R11>
								<R12>-0.0697274357</R12>
								<R20>-1</R20>
								<R21>-7.99115982e-011</R21>
								<R22>-3.6794745e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX65">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.00291402e-006</X>
								<Y>-0.400390506</Y>
								<Z>-0.132815465</Z>
								<R00>3.90647487e-010</R00>
								<R01>0.0697226822</R01>
								<R02>0.997566402</R02>
								<R10>-1</R10>
								<R11>-8.02429304e-011</R11>
								<R12>-3.80388637e-010</R12>
								<R20>4.07763739e-010</R20>
								<R21>-0.997567236</R21>
								<R22>0.0697107911</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX66">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.20755828e-007</X>
								<Y>4.99412226e-006</Y>
								<Z>0.132797584</Z>
								<R00>-1</R00>
								<R01>1.82868595e-010</R01>
								<R02>-3.98779315e-010</R02>
								<R10>3.85058263e-010</R10>
								<R11>0.0697321892</R11>
								<R12>0.997565746</R12>
								<R20>-2.10228071e-010</R20>
								<R21>0.9975667</R21>
								<R22>-0.0697179288</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX67">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>4.74962835e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.933588088</Z>
								<R00>3.49388324e-010</R00>
								<R01>0.0697334558</R01>
								<R02>0.997565627</R02>
								<R10>1</R10>
								<R11>-2.17345295e-010</R11>
								<R12>4.0118911e-010</R12>
								<R20>-2.45674314e-010</R20>
								<R21>0.997566819</R21>
								<R22>-0.0697166622</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX68">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.00708268e-006</X>
								<Y>-0.933598638</Y>
								<Z>0.400390506</Z>
								<R00>3.70557002e-010</R00>
								<R01>0.0697226822</R01>
								<R02>0.997566402</R02>
								<R10>4.07184675e-010</R10>
								<R11>-0.997567236</R11>
								<R12>0.0697107911</R12>
								<R20>1</R20>
								<R21>7.94198179e-011</R21>
								<R22>3.60306673e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX69">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.0609989e-007</X>
								<Y>-0.373298496</Y>
								<Z>-0.533198833</Z>
								<R00>1</R00>
								<R01>-2.92172536e-010</R01>
								<R02>3.48069656e-010</R02>
								<R10>4.52671733e-010</R10>
								<R11>0.0697359964</R11>
								<R12>0.997565448</R12>
								<R20>3.92738446e-011</R20>
								<R21>-0.997566283</R21>
								<R22>0.0697241053</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX70">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533206105</X>
								<Y>3.25288311e-005</Y>
								<Z>-0.400390536</Z>
								<R00>4.0660561e-010</R00>
								<R01>-0.997567236</R01>
								<R02>0.0697107911</R02>
								<R10>3.50466517e-010</R10>
								<R11>0.0697226822</R11>
								<R12>0.997566402</R12>
								<R20>-1</R20>
								<R21>-7.85967125e-011</R21>
								<R22>-3.4022471e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX71">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-6.55530812e-008</X>
								<Y>2.72896377e-005</Y>
								<Z>-0.933581114</Z>
								<R00>1</R00>
								<R01>1.40101444e-010</R01>
								<R02>2.20685789e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>0.0697202981</R11>
								<R12>0.997566581</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.997567058</R21>
								<R22>0.0697131678</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX72">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX73">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.5332008</X>
								<Y>8.52442608e-005</Y>
								<Z>-0.399536431</Z>
								<R00>-1.4692636e-009</R00>
								<R01>0.000846330251</R01>
								<R02>-0.999999821</R02>
								<R10>2.67755484e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000762904063</R12>
								<R20>1</R20>
								<R21>2.67116107e-009</R21>
								<R22>1.01012287e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX74">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.54604822e-007</X>
								<Y>7.10747918e-005</Y>
								<Z>-0.533170998</Z>
								<R00>1</R00>
								<R01>2.71114486e-009</R01>
								<R02>1.24778021e-009</R02>
								<R10>2.69523404e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000754322857</R12>
								<R20>1.24632515e-009</R20>
								<R21>-0.000838225707</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX75">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533231318</X>
								<Y>0.373406291</Y>
								<Z>-2.83906502e-007</Z>
								<R00>-1.47042167e-009</R00>
								<R01>0.000846330251</R01>
								<R02>-0.999999821</R02>
								<R10>2.71773581e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000762904063</R12>
								<R20>1</R20>
								<R21>2.71134115e-009</R21>
								<R22>1.0113117e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX76">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.93345294e-006</X>
								<Y>0.132752568</Y>
								<Z>0.400390923</Z>
								<R00>2.71005463e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000746218371</R02>
								<R10>-1.47042467e-009</R10>
								<R11>0.000829644501</R11>
								<R12>-0.999999702</R12>
								<R20>-1</R20>
								<R21>-2.69890754e-009</R21>
								<R22>-1.01076525e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX77">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>8.4651374e-006</X>
								<Y>-0.400390327</Y>
								<Z>-0.132810175</Z>
								<R00>2.71773581e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000762904063</R02>
								<R10>-1</R10>
								<R11>-2.71134115e-009</R11>
								<R12>-1.0113117e-009</R12>
								<R20>1.47042167e-009</R20>
								<R21>-0.000846330251</R21>
								<R22>0.999999821</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX78">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.62762336e-007</X>
								<Y>2.95230384e-005</Y>
								<Z>0.132817402</Z>
								<R00>-1</R00>
								<R01>-2.71112222e-009</R01>
								<R02>-1.27506505e-009</R02>
								<R10>2.71213629e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000753369299</R12>
								<R20>-1.27290256e-009</R20>
								<R21>0.000839179265</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX79">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.000142092002</X>
								<Y>-0.400391012</Y>
								<Z>0.93360728</Z>
								<R00>2.67646505e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000752098043</R02>
								<R10>1</R10>
								<R11>2.71109335e-009</R11>
								<R12>1.30962585e-009</R12>
								<R20>-1.30834588e-009</R20>
								<R21>0.000840450521</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX80">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.000101452555</X>
								<Y>-0.933591425</Y>
								<Z>0.400390327</Z>
								<R00>2.69764522e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000762904063</R02>
								<R10>1.46984258e-009</R10>
								<R11>-0.000846330251</R11>
								<R12>0.999999821</R12>
								<R20>1</R20>
								<R21>2.69125122e-009</R21>
								<R22>1.01071729e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX81">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.94687646e-007</X>
								<Y>-0.373256177</Y>
								<Z>-0.533165812</Z>
								<R00>1</R00>
								<R01>2.65282685e-009</R01>
								<R02>1.38052292e-009</R02>
								<R10>2.77974577e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000749555533</R12>
								<R20>1.10196274e-009</R20>
								<R21>-0.000832981663</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX82">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.5332008</X>
								<Y>8.52442608e-005</Y>
								<Z>-0.400390327</Z>
								<R00>1.4692636e-009</R00>
								<R01>-0.000846330251</R01>
								<R02>0.999999821</R02>
								<R10>2.67755484e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000762904063</R12>
								<R20>-1</R20>
								<R21>-2.67116107e-009</R21>
								<R22>-1.01012287e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX83">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.17958132e-008</X>
								<Y>2.16124681e-005</Y>
								<Z>-0.933588922</Z>
								<R00>1</R00>
								<R01>6.95267954e-010</R01>
								<R02>8.87237436e-011</R02>
								<R10>7.00928149e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000793890911</R12>
								<R20>5.49456258e-010</R20>
								<R21>-0.000815343345</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX84">
						<Properties>
							<CoordinateFrame name="C0">
								<X>2.73681553e-006</X>
								<Y>-7.9203943e-008</Y>
								<Z>-1.32984567e-007</Z>
								<R00>-1</R00>
								<R01>4.29049651e-005</R01>
								<R02>1.27289645e-009</R02>
								<R10>4.29049651e-005</R10>
								<R11>1</R11>
								<R12>-2.71216405e-009</R12>
								<R20>-1.27303168e-009</R20>
								<R21>-2.7121092e-009</R21>
								<R22>-1</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.73681553e-006</X>
								<Y>-7.9203943e-008</Y>
								<Z>-1.32984567e-007</Z>
								<R00>-1</R00>
								<R01>4.29049651e-005</R01>
								<R02>1.27289645e-009</R02>
								<R10>4.29049651e-005</R10>
								<R11>1</R11>
								<R12>-2.71216405e-009</R12>
								<R20>-1.27303168e-009</R20>
								<R21>-2.7121092e-009</R21>
								<R22>-1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX85">
						<Properties>
							<CoordinateFrame name="C0">
								<X>2.58500165e-007</X>
								<Y>1.47510104e-006</Y>
								<Z>9.1201764e-007</Z>
								<R00>-0.0304826926</R00>
								<R01>-0.998224854</R01>
								<R02>0.0511664115</R02>
								<R10>-0.997482359</R10>
								<R11>0.027100971</R11>
								<R12>-0.0655324385</R12>
								<R20>0.0640294328</R20>
								<R21>-0.0530351698</R21>
								<R22>-0.996537805</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.58500165e-007</X>
								<Y>1.47510104e-006</Y>
								<Z>9.1201764e-007</Z>
								<R00>-0.0304826926</R00>
								<R01>-0.998224854</R01>
								<R02>0.0511664115</R02>
								<R10>-0.997482359</R10>
								<R11>0.027100971</R11>
								<R12>-0.0655324385</R12>
								<R20>0.0640294328</R20>
								<R21>-0.0530351698</R21>
								<R22>-0.996537805</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX86">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.81937775e-006</X>
								<Y>3.66444342e-009</Y>
								<Z>4.0117655e-007</Z>
								<R00>-1</R00>
								<R01>1.83190277e-005</R01>
								<R02>1.62574338e-007</R02>
								<R10>1.82680233e-005</R10>
								<R11>1</R11>
								<R12>-5.43802935e-006</R12>
								<R20>-1.05692934e-007</R20>
								<R21>-5.39845632e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.81937775e-006</X>
								<Y>3.66444342e-009</Y>
								<Z>4.0117655e-007</Z>
								<R00>-1</R00>
								<R01>1.83190277e-005</R01>
								<R02>1.62574338e-007</R02>
								<R10>1.82680233e-005</R10>
								<R11>1</R11>
								<R12>-5.43802935e-006</R12>
								<R20>-1.05692934e-007</R20>
								<R21>-5.39845632e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX87">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.19993637e-006</X>
								<Y>-2.07580495e-008</Y>
								<Z>-4.3925632e-009</Z>
								<R00>-0.99999994</R00>
								<R01>-7.85102384e-006</R01>
								<R02>1.626222e-007</R02>
								<R10>-7.9020283e-006</R10>
								<R11>1</R11>
								<R12>-7.75445642e-006</R12>
								<R20>-1.05581343e-007</R20>
								<R21>-7.71488703e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.19993637e-006</X>
								<Y>-2.07580495e-008</Y>
								<Z>-4.3925632e-009</Z>
								<R00>-0.99999994</R00>
								<R01>-7.85102384e-006</R01>
								<R02>1.626222e-007</R02>
								<R10>-7.9020283e-006</R10>
								<R11>1</R11>
								<R12>-7.75445642e-006</R12>
								<R20>-1.05581343e-007</R20>
								<R21>-7.71488703e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX88">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-4.51719643e-007</X>
								<Y>1.87397453e-009</Y>
								<Z>-3.76758157e-006</Z>
								<R00>-0.999999821</R00>
								<R01>-3.77100787e-006</R01>
								<R02>-6.00899241e-009</R02>
								<R10>-3.82201188e-006</R10>
								<R11>1</R11>
								<R12>-4.80523522e-006</R12>
								<R20>6.30072776e-008</R20>
								<R21>-4.76566538e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.51719643e-007</X>
								<Y>1.87397453e-009</Y>
								<Z>-3.76758157e-006</Z>
								<R00>-0.999999821</R00>
								<R01>-3.77100787e-006</R01>
								<R02>-6.00899241e-009</R02>
								<R10>-3.82201188e-006</R10>
								<R11>1</R11>
								<R12>-4.80523522e-006</R12>
								<R20>6.30072776e-008</R20>
								<R21>-4.76566538e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX89">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.26816673e-007</X>
								<Y>-2.34453221e-008</Y>
								<Z>5.90223294e-007</Z>
								<R00>-0.999999762</R00>
								<R01>-1.85550198e-005</R01>
								<R02>-5.83594151e-009</R02>
								<R10>-1.86060279e-005</R10>
								<R11>1</R11>
								<R12>-8.11173049e-006</R12>
								<R20>6.29660306e-008</R20>
								<R21>-8.07215929e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.26816673e-007</X>
								<Y>-2.34453221e-008</Y>
								<Z>5.90223294e-007</Z>
								<R00>-0.999999762</R00>
								<R01>-1.85550198e-005</R01>
								<R02>-5.83594151e-009</R02>
								<R10>-1.86060279e-005</R10>
								<R11>1</R11>
								<R12>-8.11173049e-006</R12>
								<R20>6.29660306e-008</R20>
								<R21>-8.07215929e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX90">
						<Properties>
							<CoordinateFrame name="C0">
								<X>8.01678993e-007</X>
								<Y>-1.1426212e-008</Y>
								<Z>-1.10775409e-006</Z>
								<R00>-0.999999702</R00>
								<R01>-1.59489209e-005</R01>
								<R02>-5.85270321e-009</R02>
								<R10>-1.5999929e-005</R10>
								<R11>1</R11>
								<R12>-9.83655082e-006</R12>
								<R20>6.29892654e-008</R20>
								<R21>-9.79697961e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>8.01678993e-007</X>
								<Y>-1.1426212e-008</Y>
								<Z>-1.10775409e-006</Z>
								<R00>-0.999999702</R00>
								<R01>-1.59489209e-005</R01>
								<R02>-5.85270321e-009</R02>
								<R10>-1.5999929e-005</R10>
								<R11>1</R11>
								<R12>-9.83655082e-006</R12>
								<R20>6.29892654e-008</R20>
								<R21>-9.79697961e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX91">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.07855703e-006</X>
								<Y>-1.98978043e-008</Y>
								<Z>-4.36352309e-007</Z>
								<R00>-0.999999642</R00>
								<R01>-1.87142232e-005</R01>
								<R02>-3.42939558e-007</R02>
								<R10>-1.87652277e-005</R10>
								<R11>1</R11>
								<R12>-1.32089617e-005</R12>
								<R20>4.00166499e-007</R20>
								<R21>-1.31693841e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.07855703e-006</X>
								<Y>-1.98978043e-008</Y>
								<Z>-4.36352309e-007</Z>
								<R00>-0.999999642</R00>
								<R01>-1.87142232e-005</R01>
								<R02>-3.42939558e-007</R02>
								<R10>-1.87652277e-005</R10>
								<R11>1</R11>
								<R12>-1.32089617e-005</R12>
								<R20>4.00166499e-007</R20>
								<R21>-1.31693841e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX92">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-2.96131202e-006</X>
								<Y>1.15200116e-008</Y>
								<Z>-5.08313747e-008</Z>
								<R00>-0.999999583</R00>
								<R01>-2.1935306e-005</R01>
								<R02>-3.42888029e-007</R02>
								<R10>-2.19863105e-005</R10>
								<R11>1</R11>
								<R12>-1.28208176e-005</R12>
								<R20>4.00148849e-007</R20>
								<R21>-1.27812382e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.96131202e-006</X>
								<Y>1.15200116e-008</Y>
								<Z>-5.08313747e-008</Z>
								<R00>-0.999999583</R00>
								<R01>-2.1935306e-005</R01>
								<R02>-3.42888029e-007</R02>
								<R10>-2.19863105e-005</R10>
								<R11>1</R11>
								<R12>-1.28208176e-005</R12>
								<R20>4.00148849e-007</R20>
								<R21>-1.27812382e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Sound" referent="RBX93">
						<Properties>
							<bool name="Looped">false</bool>
							<string name="Name">GlassBreak</string>
							<float name="Pitch">1</float>
							<int name="PlayCount">-1</int>
							<bool name="PlayOnRemove">false</bool>
							<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=11415738</url></Content>
							<float name="Volume">1</float>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Sound" referent="RBX94">
						<Properties>
							<bool name="Looped">false</bool>
							<string name="Name">Drink</string>
							<float name="Pitch">1</float>
							<int name="PlayCount">-1</int>
							<bool name="PlayOnRemove">false</bool>
							<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
							<float name="Volume">0.5</float>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Sound" referent="RBX95">
						<Properties>
							<bool name="Looped">false</bool>
							<string name="Name">Slateskin</string>
							<float name="Pitch">1</float>
							<int name="PlayCount">-1</int>
							<bool name="PlayOnRemove">false</bool>
							<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=11450310</url></Content>
							<float name="Volume">1</float>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Script" referent="RBX96">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">SlateskinPotionScript</string>
						<ProtectedString name="Source">local Tool = script.Parent;




local GlassBreak = Instance.new(&quot;Sound&quot;)
GlassBreak.Name = &quot;GlassBreak&quot;
GlassBreak.SoundId = &quot;http://www.emeraldolds.glados.pro/asset?id=11415738&quot;
GlassBreak.Volume = 1
GlassBreak.Parent = Tool.Handle

local DrinkSound = Instance.new(&quot;Sound&quot;)
DrinkSound.Name = &quot;Drink&quot;
DrinkSound.SoundId = &quot;http://www.emeraldolds.glados.pro/asset?id=10722059&quot;
DrinkSound.Volume = .5
DrinkSound.Parent = Tool.Handle

local StoneSound = Instance.new(&quot;Sound&quot;)
StoneSound.Name = &quot;Slateskin&quot;
StoneSound.SoundId = &quot;http://www.emeraldolds.glados.pro/asset?id=11450310&quot;
StoneSound.Volume = 1
StoneSound.Parent = Tool.Handle


function slateMe(character)
	local shirt = character:FindFirstChild(&quot;Shirt&quot;)
	local pants = character:FindFirstChild(&quot;Pants&quot;)

	if (shirt ~= nil) then shirt:Remove() end
	if (pants ~= nil) then pants:Remove() end

	local c = character:GetChildren()
	for i=1,#c do
		if (c[i].className == &quot;Part&quot;) then
			c[i].Material = Enum.Material.Slate
			c[i].BrickColor = BrickColor.new(199)
		end
		if (c[i].className == &quot;Humanoid&quot;) then
			c[i].WalkSpeed = c[i].WalkSpeed * .9
			c[i].MaxHealth = 150
		end
	end
end

function onActivated()
	if not Tool.Enabled  then
		return
	end

	Tool.Enabled = false
	Tool.GripForward = Vector3.new(0,-.759,-.651)
	Tool.GripPos = Vector3.new(1.5,-.35,.1)
	Tool.GripRight = Vector3.new(1,0,0)
	Tool.GripUp = Vector3.new(0,.651,-.759)


	DrinkSound:Play()
	DrinkSound:Remove()
	wait(3)
	
	StoneSound:Play()
	local h = Tool.Parent:FindFirstChild(&quot;Humanoid&quot;)
	if (h ~= nil) then
		slateMe(h.Parent)
	else
		return
	end

	Tool.GripForward = Vector3.new(-.976,0,-0.217)
	Tool.GripPos = Vector3.new(0.1,0,.1)
	Tool.GripRight = Vector3.new(.217,0,-.976)
	Tool.GripUp = Vector3.new(0,1,0)

	wait(1)

	local p = Tool.Handle:Clone()
	GlassBreak.Parent = p
	p.Transparency = 0
	
	Tool.Parent.Torso[&quot;Right Shoulder&quot;].MaxVelocity = 0.7
	Tool.Parent.Torso[&quot;Right Shoulder&quot;].DesiredAngle = 3.6
	wait(.1)
	Tool.Parent.Torso[&quot;Right Shoulder&quot;].MaxVelocity = 1

	local dir = h.Parent.Head.CFrame.lookVector
	p.Velocity = (dir * 45) + Vector3.new(0,45,0)
	p.CanCollide = true
	Tool.Glass.Parent = p
	p.Glass.Disabled = false
	p.Parent = game.Workspace


	script.Parent:Remove()

end

function onEquipped()
	--Tool.Handle.OpenSound:play()
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Script" referent="RBX97">
					<Properties>
						<bool name="Disabled">true</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Glass</string>
						<ProtectedString name="Source">print(&quot;lol&quot;)

function Touched(part)
	script.Parent.GlassBreak:Play()
	con:disconnect()
end



con = script.Parent.Touched:connect(Touched)

wait(30)
script.Parent:Remove()</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Camera" referent="RBX98">
					<Properties>
						<Ref name="CameraSubject">null</Ref>
						<token name="CameraType">0</token>
						<CoordinateFrame name="CoordinateFrame">
							<X>2.12055135</X>
							<Y>0.722472966</Y>
							<Z>0.519796371</Z>
							<R00>0.00774979452</R00>
							<R01>-0.0127503052</R01>
							<R02>0.999888659</R02>
							<R10>4.99245263e-012</R10>
							<R11>0.999918699</R11>
							<R12>0.012750688</R12>
							<R20>-0.999969959</R20>
							<R21>-9.88152096e-005</R21>
							<R22>0.00774916448</R22>
						</CoordinateFrame>
						<CoordinateFrame name="Focus">
							<X>-0.437747955</X>
							<Y>0.689849257</Y>
							<Z>0.499969482</Z>
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
						<string name="Name">ThumbnailCamera</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Tool" referent="RBX99">
				<Properties>
					<bool name="Enabled">true</bool>
					<CoordinateFrame name="Grip">
						<X>-0.5</X>
						<Y>-0.100000001</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>-0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">GhostBurger</string>
					<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=16925728</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Part" referent="RBX100">
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
						<int name="BrickColor">1002</int>
						<CoordinateFrame name="CFrame">
							<X>14.5</X>
							<Y>16.7908058</Y>
							<Z>2824.5</Z>
							<R00>5.96046448e-008</R00>
							<R01>-2.03374e-017</R01>
							<R02>0.99999994</R02>
							<R10>2.44118899e-017</R10>
							<R11>1</R11>
							<R12>2.03374e-017</R12>
							<R20>-0.99999994</R20>
							<R21>2.44118899e-017</R21>
							<R22>5.96046448e-008</R22>
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
						<bool name="Locked">true</bool>
						<token name="Material">256</token>
						<string name="Name">Handle</string>
						<float name="Reflectance">0</float>
						<float name="RightParamA">-0.5</float>
						<float name="RightParamB">0.5</float>
						<token name="RightSurface">0</token>
						<token name="RightSurfaceInput">0</token>
						<Vector3 name="RotVelocity">
							<X>9.49099292e-017</X>
							<Y>-4.68532211e-019</Y>
							<Z>8.60227471e-017</Z>
						</Vector3>
						<float name="TopParamA">-0.5</float>
						<float name="TopParamB">0.5</float>
						<token name="TopSurface">0</token>
						<token name="TopSurfaceInput">0</token>
						<float name="Transparency">0</float>
						<Vector3 name="Velocity">
							<X>-3.39927524e-017</X>
							<Y>-0.00712803286</Y>
							<Z>3.78079244e-017</Z>
						</Vector3>
						<bool name="archivable">true</bool>
						<token name="shape">1</token>
						<Vector3 name="size">
							<X>1</X>
							<Y>0.800000012</Y>
							<Z>1</Z>
						</Vector3>
					</Properties>
					<Item class="SpecialMesh" referent="RBX101">
						<Properties>
							<token name="LODX">2</token>
							<token name="LODY">2</token>
							<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=16646125</url></Content>
							<token name="MeshType">5</token>
							<string name="Name">Mesh</string>
							<Vector3 name="Offset">
								<X>0</X>
								<Y>0</Y>
								<Z>0</Z>
							</Vector3>
							<Vector3 name="Scale">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=16921716</url></Content>
							<Vector3 name="VertexColor">
								<X>1</X>
								<Y>1</Y>
								<Z>1</Z>
							</Vector3>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX102">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-4.71828389e-006</X>
								<Y>-1.06949216e-007</Y>
								<Z>6.73912837e-008</Z>
								<R00>-1.96380037e-010</R00>
								<R01>-7.15101578e-006</R01>
								<R02>1</R02>
								<R10>-3.45956111e-011</R10>
								<R11>1</R11>
								<R12>9.53468771e-006</R12>
								<R20>-1</R20>
								<R21>4.01852024e-011</R21>
								<R22>-2.64911593e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.71828389e-006</X>
								<Y>-1.06949216e-007</Y>
								<Z>6.73912837e-008</Z>
								<R00>-1.96380037e-010</R00>
								<R01>-7.15101578e-006</R01>
								<R02>1</R02>
								<R10>-3.45956111e-011</R10>
								<R11>1</R11>
								<R12>9.53468771e-006</R12>
								<R20>-1</R20>
								<R21>4.01852024e-011</R21>
								<R22>-2.64911593e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX103">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-1.34138972e-007</X>
								<Y>-6.91051537e-006</Y>
								<Z>0</Z>
								<R00>-3.91537502e-021</R00>
								<R01>0.999999106</R01>
								<R02>-0.00133771845</R02>
								<R10>2.81109586e-022</R10>
								<R11>0.00133771845</R11>
								<R12>0.999999106</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.34138972e-007</X>
								<Y>-6.91051537e-006</Y>
								<Z>0</Z>
								<R00>-3.91537502e-021</R00>
								<R01>0.999999106</R01>
								<R02>-0.00133771845</R02>
								<R10>2.81109586e-022</R10>
								<R11>0.00133771845</R11>
								<R12>0.999999106</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX104">
						<Properties>
							<CoordinateFrame name="C0">
								<X>3.64912034e-006</X>
								<Y>-1.13236744e-007</Y>
								<Z>-2.01656292e-008</Z>
								<R00>-7.08486672e-011</R00>
								<R01>0.000798657886</R01>
								<R02>-0.999999702</R02>
								<R10>1.55140234e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000793890678</R12>
								<R20>1</R20>
								<R21>1.55083765e-010</R21>
								<R22>7.09721865e-011</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.64912034e-006</X>
								<Y>-1.13236744e-007</Y>
								<Z>-2.01656292e-008</Z>
								<R00>-7.08486672e-011</R00>
								<R01>0.000798657886</R01>
								<R02>-0.999999702</R02>
								<R10>1.55140234e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000793890678</R12>
								<R20>1</R20>
								<R21>1.55083765e-010</R21>
								<R22>7.09721865e-011</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX105">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.6321755e-007</X>
								<Y>3.49538391e-006</Y>
								<Z>0</Z>
								<R00>-3.9252309e-021</R00>
								<R01>0.996502578</R01>
								<R02>-0.0835621059</R02>
								<R10>-4.1799742e-023</R10>
								<R11>0.0835621059</R11>
								<R12>0.996502578</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.6321755e-007</X>
								<Y>3.49538391e-006</Y>
								<Z>0</Z>
								<R00>-3.9252309e-021</R00>
								<R01>0.996502578</R01>
								<R02>-0.0835621059</R02>
								<R10>-4.1799742e-023</R10>
								<R11>0.0835621059</R11>
								<R12>0.996502578</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX106">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX107">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533214211</X>
								<Y>4.09488493e-005</Y>
								<Z>-0.399536163</Z>
								<R00>-6.19143847e-010</R00>
								<R01>0.000817726948</R01>
								<R02>-0.999999702</R02>
								<R10>8.15887191e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791507307</R12>
								<R20>1</R20>
								<R21>8.10171485e-010</R21>
								<R22>1.58504349e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX108">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.12273511e-007</X>
								<Y>2.60849974e-005</Y>
								<Z>-0.533189535</Z>
								<R00>1</R00>
								<R01>8.50161941e-010</R01>
								<R02>3.96162853e-010</R02>
								<R10>8.3357371e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000782926101</R12>
								<R20>3.96190469e-010</R20>
								<R21>-0.000809622463</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX109">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533214211</X>
								<Y>0.373362005</Y>
								<Z>-4.18045545e-008</Z>
								<R00>-6.20301976e-010</R00>
								<R01>0.000817726948</R01>
								<R02>-0.999999702</R02>
								<R10>8.56068161e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791507307</R12>
								<R20>1</R20>
								<R21>8.50351511e-010</R21>
								<R22>1.59694272e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX110">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-5.43287024e-006</X>
								<Y>0.132771105</Y>
								<Z>0.400390655</Z>
								<R00>8.48401349e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000774821616</R02>
								<R10>-6.20273943e-010</R10>
								<R11>0.000801041257</R11>
								<R12>-0.999999702</R12>
								<R20>-1</R20>
								<R21>-8.37917902e-010</R21>
								<R22>-1.59147528e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX111">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.92850495e-006</X>
								<Y>-0.400390595</Y>
								<Z>-0.132823572</Z>
								<R00>8.56068161e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791507307</R02>
								<R10>-1</R10>
								<R11>-8.50351511e-010</R11>
								<R12>-1.59694272e-010</R12>
								<R20>6.20301976e-010</R20>
								<R21>-0.000817726948</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX112">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.20404536e-007</X>
								<Y>1.7940567e-005</Y>
								<Z>0.132805407</Z>
								<R00>-1</R00>
								<R01>-8.50140069e-010</R01>
								<R02>-4.23447666e-010</R02>
								<R10>8.50476911e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000781972543</R12>
								<R20>-4.22769625e-010</R20>
								<R21>0.000810576021</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX113">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.96581813e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.9335953</Z>
								<R00>8.14806722e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000780701288</R02>
								<R10>1</R10>
								<R11>8.50112314e-010</R11>
								<R12>4.58008492e-010</R12>
								<R20>-4.58215271e-010</R20>
								<R21>0.000811847276</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX114">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.33017072e-005</X>
								<Y>-0.933604836</Y>
								<Z>0.400390595</Z>
								<R00>8.35977676e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791507307</R02>
								<R10>6.19722884e-010</R10>
								<R11>-0.000817726948</R11>
								<R12>0.999999702</R12>
								<R20>1</R20>
								<R21>8.30261526e-010</R21>
								<R22>1.59099317e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX115">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.52226988e-007</X>
								<Y>-0.373301029</Y>
								<Z>-0.533214867</Z>
								<R00>1</R00>
								<R01>7.91847865e-010</R01>
								<R02>5.28903865e-010</R02>
								<R10>9.18089604e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000778158777</R12>
								<R20>2.51818288e-010</R20>
								<R21>-0.000804378418</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX116">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533214211</X>
								<Y>4.09488493e-005</Y>
								<Z>-0.400390595</Z>
								<R00>6.19143847e-010</R00>
								<R01>-0.000817726948</R01>
								<R02>0.999999702</R02>
								<R10>8.15887191e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791507307</R12>
								<R20>-1</R20>
								<R21>-8.10171485e-010</R21>
								<R22>-1.58504349e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX117">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.25072437e-006</X>
								<Y>-9.04979558e-008</Y>
								<Z>-6.02840373e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.000803425093</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789123471</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915421e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.85732619e-008</X>
								<Y>1.708794e-006</Y>
								<Z>-0.933600962</Z>
								<R00>1</R00>
								<R01>2.30016242e-010</R01>
								<R02>-1.24190033e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000801041722</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.000808192533</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX118">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX119">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533207953</X>
								<Y>4.02465412e-005</Y>
								<Z>-0.399536252</Z>
								<R00>-4.0660561e-010</R00>
								<R01>0.997998893</R01>
								<R02>0.0632319078</R02>
								<R10>3.50466517e-010</R10>
								<R11>-0.0632200092</R11>
								<R12>0.997999609</R12>
								<R20>1</R20>
								<R21>3.27715632e-011</R21>
								<R22>3.47643969e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX120">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.86806875e-007</X>
								<Y>4.67300815e-005</Y>
								<Z>-0.533184648</Z>
								<R00>1</R00>
								<R01>-6.89996116e-010</R01>
								<R02>1.27482458e-009</R02>
								<R10>1.29899103e-009</R10>
								<R11>-0.0631971732</R11>
								<R12>0.998001099</R12>
								<R20>6.08729123e-010</R20>
								<R21>-0.997998476</R21>
								<R22>-0.0632380918</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX121">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533224404</X>
								<Y>0.373393357</Y>
								<Z>-3.90072529e-007</Z>
								<R00>-8.32836911e-010</R00>
								<R01>0.997998118</R01>
								<R02>0.0632461831</R02>
								<R10>1.32148736e-009</R10>
								<R11>-0.0632057413</R11>
								<R12>0.998000562</R12>
								<R20>1</R20>
								<R21>-4.5400067e-010</R21>
								<R22>1.28977651e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX122">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.24499784e-005</X>
								<Y>0.132795051</Y>
								<Z>0.400390744</Z>
								<R00>3.829842e-010</R00>
								<R01>-0.0632033572</R01>
								<R02>0.998000681</R02>
								<R10>-4.07727963e-010</R10>
								<R11>0.997999966</R11>
								<R12>0.0632152557</R12>
								<R20>-1</R20>
								<R21>-3.03974276e-011</R21>
								<R22>-3.75296128e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX123">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>9.7206248e-006</X>
								<Y>-0.400390506</Y>
								<Z>-0.132816374</Z>
								<R00>3.90647487e-010</R00>
								<R01>-0.0632200092</R01>
								<R02>0.997999609</R02>
								<R10>-1</R10>
								<R11>-2.90755128e-011</R11>
								<R12>-3.87671339e-010</R12>
								<R20>4.07763739e-010</R20>
								<R21>-0.997998893</R21>
								<R22>-0.0632319078</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX124">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.12741731e-007</X>
								<Y>1.47659775e-005</Y>
								<Z>0.132799253</Z>
								<R00>-1</R00>
								<R01>2.34150421e-010</R01>
								<R02>-3.70997927e-010</R02>
								<R10>3.85058263e-010</R10>
								<R11>-0.0632104948</R11>
								<R12>0.998000264</R12>
								<R20>-2.10228071e-010</R20>
								<R21>0.99799931</R21>
								<R22>0.0632247701</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX125">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.39694889e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.933587611</Z>
								<R00>3.49388324e-010</R00>
								<R01>-0.0632092282</R01>
								<R02>0.998000324</R02>
								<R10>1</R10>
								<R11>-2.68642109e-010</R11>
								<R12>3.68813091e-010</R12>
								<R20>-2.45674314e-010</R20>
								<R21>0.997999251</R21>
								<R22>0.0632260367</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX126">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>9.72479302e-006</X>
								<Y>-0.933596671</Y>
								<Z>0.400390506</Z>
								<R00>3.70557002e-010</R00>
								<R01>-0.0632200092</R01>
								<R02>0.997999609</R02>
								<R10>4.07184675e-010</R10>
								<R11>-0.997998893</R11>
								<R12>-0.0632319078</R12>
								<R20>1</R20>
								<R21>3.09235346e-011</R21>
								<R22>3.67657654e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX127">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-9.38037488e-008</X>
								<Y>-0.37332812</Y>
								<Z>-0.533202708</Z>
								<R00>1</R00>
								<R01>-3.35761835e-010</R01>
								<R02>3.06237286e-010</R02>
								<R10>4.52671733e-010</R10>
								<R11>-0.0632066876</R11>
								<R12>0.998000503</R12>
								<R20>3.92738446e-011</R20>
								<R21>-0.997999728</R21>
								<R22>-0.0632185861</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX128">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533207953</X>
								<Y>4.02465412e-005</Y>
								<Z>-0.400390506</Z>
								<R00>4.0660561e-010</R00>
								<R01>-0.997998893</R01>
								<R02>-0.0632319078</R02>
								<R10>3.50466517e-010</R10>
								<R11>-0.0632200092</R11>
								<R12>0.997999609</R12>
								<R20>-1</R20>
								<R21>-3.27715632e-011</R21>
								<R22>-3.47643969e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX129">
						<Properties>
							<CoordinateFrame name="C0">
								<X>4.58660736e-007</X>
								<Y>-1.05566846e-006</Y>
								<Z>0</Z>
								<R00>-3.88906235e-021</R00>
								<R01>0.997999787</R01>
								<R02>0.0632176325</R02>
								<R10>5.33270982e-022</R10>
								<R11>-0.0632176325</R11>
								<R12>0.997999787</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-7.07679817e-008</X>
								<Y>2.65414451e-006</Y>
								<Z>-0.933581531</Z>
								<R00>1</R00>
								<R01>1.09589553e-010</R01>
								<R02>2.37319969e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>-0.0632223934</R11>
								<R12>0.997999489</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.997999012</R21>
								<R22>-0.0632295236</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX130">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX131">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533212543</X>
								<Y>4.33809255e-005</Y>
								<Z>-0.399536133</Z>
								<R00>-4.77452022e-010</R00>
								<R01>0.000812952989</R01>
								<R02>-0.999999702</R02>
								<R10>5.0560689e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000796274282</R12>
								<R20>1</R20>
								<R21>5.00004205e-010</R21>
								<R22>1.65627564e-011</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX132">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.3357552e-007</X>
								<Y>5.55160077e-005</Y>
								<Z>-0.533165157</Z>
								<R00>1</R00>
								<R01>1.7806564e-009</R01>
								<R02>8.21978263e-010</R02>
								<R10>1.76440684e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000768627622</R12>
								<R20>8.21264445e-010</R20>
								<R21>-0.000823920942</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX133">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533225417</X>
								<Y>0.37339133</Y>
								<Z>-1.62893741e-007</Z>
								<R00>-1.04536846e-009</R00>
								<R01>0.000832025486</R01>
								<R02>-0.999999821</R02>
								<R10>1.78690496e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000777208828</R12>
								<R20>1</R20>
								<R21>1.78084936e-009</R21>
								<R22>5.85509641e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX134">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.40306758e-006</X>
								<Y>0.132771388</Y>
								<Z>0.400390655</Z>
								<R00>8.48401349e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000774823886</R02>
								<R10>-6.20273943e-010</R10>
								<R11>0.000801038579</R11>
								<R12>-0.999999702</R12>
								<R20>-1</R20>
								<R21>-8.37917902e-010</R21>
								<R22>-1.59147542e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX135">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.28626851e-007</X>
								<Y>-0.400390595</Y>
								<Z>-0.13282387</Z>
								<R00>8.56068161e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791509985</R02>
								<R10>-1</R10>
								<R11>-8.50351511e-010</R11>
								<R12>-1.59694299e-010</R12>
								<R20>6.20301976e-010</R20>
								<R21>-0.000817724678</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX136">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.20785018e-007</X>
								<Y>3.03727884e-005</Y>
								<Z>0.132775158</Z>
								<R00>-1</R00>
								<R01>-8.50140069e-010</R01>
								<R02>-4.23447694e-010</R02>
								<R10>8.50476911e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000781978946</R12>
								<R20>-4.22769625e-010</R20>
								<R21>0.000810569618</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX137">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>6.63429382e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.933595598</Z>
								<R00>8.14806722e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000780706818</R02>
								<R10>1</R10>
								<R11>8.50112369e-010</R11>
								<R12>4.58008492e-010</R12>
								<R20>-4.58215271e-010</R20>
								<R21>0.000811841746</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX138">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.15904674e-005</X>
								<Y>-0.933605134</Y>
								<Z>0.400390595</Z>
								<R00>8.35977676e-010</R00>
								<R01>0.999999702</R01>
								<R02>0.000791509985</R02>
								<R10>6.19722884e-010</R10>
								<R11>-0.000817724678</R11>
								<R12>0.999999702</R12>
								<R20>1</R20>
								<R21>8.30261526e-010</R21>
								<R22>1.59099331e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX139">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.52702455e-007</X>
								<Y>-0.373297483</Y>
								<Z>-0.533215165</Z>
								<R00>1</R00>
								<R01>7.91847865e-010</R01>
								<R02>5.28903921e-010</R02>
								<R10>9.18089604e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000778160116</R12>
								<R20>2.51818288e-010</R20>
								<R21>-0.000804377254</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX140">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533214509</X>
								<Y>4.16217954e-005</Y>
								<Z>-0.400390595</Z>
								<R00>6.19143847e-010</R00>
								<R01>-0.000817724678</R01>
								<R02>0.999999702</R02>
								<R10>8.15887191e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000791509985</R12>
								<R20>-1</R20>
								<R21>-8.10171485e-010</R21>
								<R22>-1.58504362e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX141">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.53692553e-006</X>
								<Y>2.04514564e-007</Y>
								<Z>-6.04753154e-008</Z>
								<R00>-2.12544884e-010</R00>
								<R01>0.00080342195</R01>
								<R02>-0.999999702</R02>
								<R10>4.65420175e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000789126614</R12>
								<R20>1</R20>
								<R21>4.6525081e-010</R21>
								<R22>2.12915435e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.86851866e-008</X>
								<Y>1.33582325e-005</Y>
								<Z>-0.93360126</Z>
								<R00>1</R00>
								<R01>2.30016242e-010</R01>
								<R02>-1.24190033e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000801045971</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.000808193639</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX142">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX143">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533207655</X>
								<Y>4.00506069e-005</Y>
								<Z>-0.399536133</Z>
								<R00>-2.64911593e-010</R00>
								<R01>0.997566879</R01>
								<R02>-0.069715552</R02>
								<R10>4.01852024e-011</R10>
								<R11>0.0697179288</R11>
								<R12>0.9975667</R12>
								<R20>1</R20>
								<R21>1.98314268e-010</R21>
								<R22>2.08188033e-011</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX144">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.09776021e-007</X>
								<Y>5.64174661e-005</Y>
								<Z>-0.533183694</Z>
								<R00>1</R00>
								<R01>-5.1479393e-010</R01>
								<R02>1.35508649e-009</R02>
								<R10>1.29899103e-009</R10>
								<R11>0.0697455108</R11>
								<R12>0.997564793</R12>
								<R20>6.08729123e-010</R20>
								<R21>-0.997567654</R21>
								<R22>0.0697046071</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX145">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.53322345</X>
								<Y>0.373397857</Y>
								<Z>-4.03579065e-007</Z>
								<R00>-8.32836911e-010</R00>
								<R01>0.997568309</R01>
								<R02>-0.0696965307</R02>
								<R10>1.32148736e-009</R10>
								<R11>0.0697369501</R11>
								<R12>0.997565389</R12>
								<R20>1</R20>
								<R21>-2.78900597e-010</R21>
								<R22>1.33860167e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX146">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-9.81253652e-006</X>
								<Y>0.132794693</Y>
								<Z>0.400390744</Z>
								<R00>3.829842e-010</R00>
								<R01>0.0697393268</R01>
								<R02>0.99756521</R02>
								<R10>-4.07727963e-010</R10>
								<R11>0.997566044</R11>
								<R12>-0.0697274357</R12>
								<R20>-1</R20>
								<R21>-7.99115982e-011</R21>
								<R22>-3.6794745e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX147">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.00291402e-006</X>
								<Y>-0.400390506</Y>
								<Z>-0.132815465</Z>
								<R00>3.90647487e-010</R00>
								<R01>0.0697226822</R01>
								<R02>0.997566402</R02>
								<R10>-1</R10>
								<R11>-8.02429304e-011</R11>
								<R12>-3.80388637e-010</R12>
								<R20>4.07763739e-010</R20>
								<R21>-0.997567236</R21>
								<R22>0.0697107911</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX148">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.20755828e-007</X>
								<Y>4.99412226e-006</Y>
								<Z>0.132797584</Z>
								<R00>-1</R00>
								<R01>1.82868595e-010</R01>
								<R02>-3.98779315e-010</R02>
								<R10>3.85058263e-010</R10>
								<R11>0.0697321892</R11>
								<R12>0.997565746</R12>
								<R20>-2.10228071e-010</R20>
								<R21>0.9975667</R21>
								<R22>-0.0697179288</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX149">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>4.74962835e-005</X>
								<Y>-0.400390744</Y>
								<Z>0.933588088</Z>
								<R00>3.49388324e-010</R00>
								<R01>0.0697334558</R01>
								<R02>0.997565627</R02>
								<R10>1</R10>
								<R11>-2.17345295e-010</R11>
								<R12>4.0118911e-010</R12>
								<R20>-2.45674314e-010</R20>
								<R21>0.997566819</R21>
								<R22>-0.0697166622</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX150">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.00708268e-006</X>
								<Y>-0.933598638</Y>
								<Z>0.400390506</Z>
								<R00>3.70557002e-010</R00>
								<R01>0.0697226822</R01>
								<R02>0.997566402</R02>
								<R10>4.07184675e-010</R10>
								<R11>-0.997567236</R11>
								<R12>0.0697107911</R12>
								<R20>1</R20>
								<R21>7.94198179e-011</R21>
								<R22>3.60306673e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX151">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-1.0609989e-007</X>
								<Y>-0.373298496</Y>
								<Z>-0.533198833</Z>
								<R00>1</R00>
								<R01>-2.92172536e-010</R01>
								<R02>3.48069656e-010</R02>
								<R10>4.52671733e-010</R10>
								<R11>0.0697359964</R11>
								<R12>0.997565448</R12>
								<R20>3.92738446e-011</R20>
								<R21>-0.997566283</R21>
								<R22>0.0697241053</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX152">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.533206105</X>
								<Y>3.25288311e-005</Y>
								<Z>-0.400390536</Z>
								<R00>4.0660561e-010</R00>
								<R01>-0.997567236</R01>
								<R02>0.0697107911</R02>
								<R10>3.50466517e-010</R10>
								<R11>0.0697226822</R11>
								<R12>0.997566402</R12>
								<R20>-1</R20>
								<R21>-7.85967125e-011</R21>
								<R22>-3.4022471e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX153">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-3.95431243e-007</X>
								<Y>7.30769489e-006</Y>
								<Z>0</Z>
								<R00>-3.92543285e-021</R00>
								<R01>0.997566223</R01>
								<R02>-0.069725059</R02>
								<R10>1.26768054e-023</R10>
								<R11>0.069725059</R11>
								<R12>0.997566223</R12>
								<R20>1</R20>
								<R21>3.91499535e-021</R21>
								<R22>-2.86346992e-022</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-6.55530812e-008</X>
								<Y>2.72896377e-005</Y>
								<Z>-0.933581114</Z>
								<R00>1</R00>
								<R01>1.40101444e-010</R01>
								<R02>2.20685789e-010</R02>
								<R10>2.3550692e-010</R10>
								<R11>0.0697202981</R11>
								<R12>0.997566581</R12>
								<R20>3.36916911e-010</R20>
								<R21>-0.997567058</R21>
								<R22>0.0697131678</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX154">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX155">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.5332008</X>
								<Y>8.52442608e-005</Y>
								<Z>-0.399536431</Z>
								<R00>-1.4692636e-009</R00>
								<R01>0.000846330251</R01>
								<R02>-0.999999821</R02>
								<R10>2.67755484e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000762904063</R12>
								<R20>1</R20>
								<R21>2.67116107e-009</R21>
								<R22>1.01012287e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX156">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.54604822e-007</X>
								<Y>7.10747918e-005</Y>
								<Z>-0.533170998</Z>
								<R00>1</R00>
								<R01>2.71114486e-009</R01>
								<R02>1.24778021e-009</R02>
								<R10>2.69523404e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000754322857</R12>
								<R20>1.24632515e-009</R20>
								<R21>-0.000838225707</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX157">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.533231318</X>
								<Y>0.373406291</Y>
								<Z>-2.83906502e-007</Z>
								<R00>-1.47042167e-009</R00>
								<R01>0.000846330251</R01>
								<R02>-0.999999821</R02>
								<R10>2.71773581e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000762904063</R12>
								<R20>1</R20>
								<R21>2.71134115e-009</R21>
								<R22>1.0113117e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX158">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.93345294e-006</X>
								<Y>0.132752568</Y>
								<Z>0.400390923</Z>
								<R00>2.71005463e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000746218371</R02>
								<R10>-1.47042467e-009</R10>
								<R11>0.000829644501</R11>
								<R12>-0.999999702</R12>
								<R20>-1</R20>
								<R21>-2.69890754e-009</R21>
								<R22>-1.01076525e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX159">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>8.4651374e-006</X>
								<Y>-0.400390327</Y>
								<Z>-0.132810175</Z>
								<R00>2.71773581e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000762904063</R02>
								<R10>-1</R10>
								<R11>-2.71134115e-009</R11>
								<R12>-1.0113117e-009</R12>
								<R20>1.47042167e-009</R20>
								<R21>-0.000846330251</R21>
								<R22>0.999999821</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX160">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>3.62762336e-007</X>
								<Y>2.95230384e-005</Y>
								<Z>0.132817402</Z>
								<R00>-1</R00>
								<R01>-2.71112222e-009</R01>
								<R02>-1.27506505e-009</R02>
								<R10>2.71213629e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000753369299</R12>
								<R20>-1.27290256e-009</R20>
								<R21>0.000839179265</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX161">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.000142092002</X>
								<Y>-0.400391012</Y>
								<Z>0.93360728</Z>
								<R00>2.67646505e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000752098043</R02>
								<R10>1</R10>
								<R11>2.71109335e-009</R11>
								<R12>1.30962585e-009</R12>
								<R20>-1.30834588e-009</R20>
								<R21>0.000840450521</R21>
								<R22>-0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX162">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>0.000101452555</X>
								<Y>-0.933591425</Y>
								<Z>0.400390327</Z>
								<R00>2.69764522e-009</R00>
								<R01>0.999999702</R01>
								<R02>0.000762904063</R02>
								<R10>1.46984258e-009</R10>
								<R11>-0.000846330251</R11>
								<R12>0.999999821</R12>
								<R20>1</R20>
								<R21>2.69125122e-009</R21>
								<R22>1.01071729e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX163">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-3.94687646e-007</X>
								<Y>-0.373256177</Y>
								<Z>-0.533165812</Z>
								<R00>1</R00>
								<R01>2.65282685e-009</R01>
								<R02>1.38052292e-009</R02>
								<R10>2.77974577e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000749555533</R12>
								<R20>1.10196274e-009</R20>
								<R21>-0.000832981663</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX164">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-0.5332008</X>
								<Y>8.52442608e-005</Y>
								<Z>-0.400390327</Z>
								<R00>1.4692636e-009</R00>
								<R01>-0.000846330251</R01>
								<R02>0.999999821</R02>
								<R10>2.67755484e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000762904063</R12>
								<R20>-1</R20>
								<R21>-2.67116107e-009</R21>
								<R22>-1.01012287e-009</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX165">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.14122267e-005</X>
								<Y>2.31042439e-008</Y>
								<Z>-1.81467669e-007</Z>
								<R00>-6.37624675e-010</R00>
								<R01>0.000817726715</R01>
								<R02>-0.999999702</R02>
								<R10>1.396256e-009</R10>
								<R11>0.999999702</R11>
								<R12>0.000774821849</R12>
								<R20>1</R20>
								<R21>1.39574785e-009</R21>
								<R22>6.38736286e-010</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.17958132e-008</X>
								<Y>2.16124681e-005</Y>
								<Z>-0.933588922</Z>
								<R00>1</R00>
								<R01>6.95267954e-010</R01>
								<R02>8.87237436e-011</R02>
								<R10>7.00928149e-010</R10>
								<R11>0.999999702</R11>
								<R12>0.000793890911</R12>
								<R20>5.49456258e-010</R20>
								<R21>-0.000815343345</R21>
								<R22>0.999999702</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX166">
						<Properties>
							<CoordinateFrame name="C0">
								<X>2.73681553e-006</X>
								<Y>-7.9203943e-008</Y>
								<Z>-1.32984567e-007</Z>
								<R00>-1</R00>
								<R01>4.29049651e-005</R01>
								<R02>1.27289645e-009</R02>
								<R10>4.29049651e-005</R10>
								<R11>1</R11>
								<R12>-2.71216405e-009</R12>
								<R20>-1.27303168e-009</R20>
								<R21>-2.7121092e-009</R21>
								<R22>-1</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.73681553e-006</X>
								<Y>-7.9203943e-008</Y>
								<Z>-1.32984567e-007</Z>
								<R00>-1</R00>
								<R01>4.29049651e-005</R01>
								<R02>1.27289645e-009</R02>
								<R10>4.29049651e-005</R10>
								<R11>1</R11>
								<R12>-2.71216405e-009</R12>
								<R20>-1.27303168e-009</R20>
								<R21>-2.7121092e-009</R21>
								<R22>-1</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX167">
						<Properties>
							<CoordinateFrame name="C0">
								<X>2.58500165e-007</X>
								<Y>1.47510104e-006</Y>
								<Z>9.1201764e-007</Z>
								<R00>-0.0304826926</R00>
								<R01>-0.998224854</R01>
								<R02>0.0511664115</R02>
								<R10>-0.997482359</R10>
								<R11>0.027100971</R11>
								<R12>-0.0655324385</R12>
								<R20>0.0640294328</R20>
								<R21>-0.0530351698</R21>
								<R22>-0.996537805</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>2.58500165e-007</X>
								<Y>1.47510104e-006</Y>
								<Z>9.1201764e-007</Z>
								<R00>-0.0304826926</R00>
								<R01>-0.998224854</R01>
								<R02>0.0511664115</R02>
								<R10>-0.997482359</R10>
								<R11>0.027100971</R11>
								<R12>-0.0655324385</R12>
								<R20>0.0640294328</R20>
								<R21>-0.0530351698</R21>
								<R22>-0.996537805</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX168">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.81937775e-006</X>
								<Y>3.66444342e-009</Y>
								<Z>4.0117655e-007</Z>
								<R00>-1</R00>
								<R01>1.83190277e-005</R01>
								<R02>1.62574338e-007</R02>
								<R10>1.82680233e-005</R10>
								<R11>1</R11>
								<R12>-5.43802935e-006</R12>
								<R20>-1.05692934e-007</R20>
								<R21>-5.39845632e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.81937775e-006</X>
								<Y>3.66444342e-009</Y>
								<Z>4.0117655e-007</Z>
								<R00>-1</R00>
								<R01>1.83190277e-005</R01>
								<R02>1.62574338e-007</R02>
								<R10>1.82680233e-005</R10>
								<R11>1</R11>
								<R12>-5.43802935e-006</R12>
								<R20>-1.05692934e-007</R20>
								<R21>-5.39845632e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX169">
						<Properties>
							<CoordinateFrame name="C0">
								<X>5.19993637e-006</X>
								<Y>-2.07580495e-008</Y>
								<Z>-4.3925632e-009</Z>
								<R00>-0.99999994</R00>
								<R01>-7.85102384e-006</R01>
								<R02>1.626222e-007</R02>
								<R10>-7.9020283e-006</R10>
								<R11>1</R11>
								<R12>-7.75445642e-006</R12>
								<R20>-1.05581343e-007</R20>
								<R21>-7.71488703e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>5.19993637e-006</X>
								<Y>-2.07580495e-008</Y>
								<Z>-4.3925632e-009</Z>
								<R00>-0.99999994</R00>
								<R01>-7.85102384e-006</R01>
								<R02>1.626222e-007</R02>
								<R10>-7.9020283e-006</R10>
								<R11>1</R11>
								<R12>-7.75445642e-006</R12>
								<R20>-1.05581343e-007</R20>
								<R21>-7.71488703e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX170">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-4.51719643e-007</X>
								<Y>1.87397453e-009</Y>
								<Z>-3.76758157e-006</Z>
								<R00>-0.999999821</R00>
								<R01>-3.77100787e-006</R01>
								<R02>-6.00899241e-009</R02>
								<R10>-3.82201188e-006</R10>
								<R11>1</R11>
								<R12>-4.80523522e-006</R12>
								<R20>6.30072776e-008</R20>
								<R21>-4.76566538e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-4.51719643e-007</X>
								<Y>1.87397453e-009</Y>
								<Z>-3.76758157e-006</Z>
								<R00>-0.999999821</R00>
								<R01>-3.77100787e-006</R01>
								<R02>-6.00899241e-009</R02>
								<R10>-3.82201188e-006</R10>
								<R11>1</R11>
								<R12>-4.80523522e-006</R12>
								<R20>6.30072776e-008</R20>
								<R21>-4.76566538e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX171">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.26816673e-007</X>
								<Y>-2.34453221e-008</Y>
								<Z>5.90223294e-007</Z>
								<R00>-0.999999762</R00>
								<R01>-1.85550198e-005</R01>
								<R02>-5.83594151e-009</R02>
								<R10>-1.86060279e-005</R10>
								<R11>1</R11>
								<R12>-8.11173049e-006</R12>
								<R20>6.29660306e-008</R20>
								<R21>-8.07215929e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.26816673e-007</X>
								<Y>-2.34453221e-008</Y>
								<Z>5.90223294e-007</Z>
								<R00>-0.999999762</R00>
								<R01>-1.85550198e-005</R01>
								<R02>-5.83594151e-009</R02>
								<R10>-1.86060279e-005</R10>
								<R11>1</R11>
								<R12>-8.11173049e-006</R12>
								<R20>6.29660306e-008</R20>
								<R21>-8.07215929e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX172">
						<Properties>
							<CoordinateFrame name="C0">
								<X>8.01678993e-007</X>
								<Y>-1.1426212e-008</Y>
								<Z>-1.10775409e-006</Z>
								<R00>-0.999999702</R00>
								<R01>-1.59489209e-005</R01>
								<R02>-5.85270321e-009</R02>
								<R10>-1.5999929e-005</R10>
								<R11>1</R11>
								<R12>-9.83655082e-006</R12>
								<R20>6.29892654e-008</R20>
								<R21>-9.79697961e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>8.01678993e-007</X>
								<Y>-1.1426212e-008</Y>
								<Z>-1.10775409e-006</Z>
								<R00>-0.999999702</R00>
								<R01>-1.59489209e-005</R01>
								<R02>-5.85270321e-009</R02>
								<R10>-1.5999929e-005</R10>
								<R11>1</R11>
								<R12>-9.83655082e-006</R12>
								<R20>6.29892654e-008</R20>
								<R21>-9.79697961e-006</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX173">
						<Properties>
							<CoordinateFrame name="C0">
								<X>1.07855703e-006</X>
								<Y>-1.98978043e-008</Y>
								<Z>-4.36352309e-007</Z>
								<R00>-0.999999642</R00>
								<R01>-1.87142232e-005</R01>
								<R02>-3.42939558e-007</R02>
								<R10>-1.87652277e-005</R10>
								<R11>1</R11>
								<R12>-1.32089617e-005</R12>
								<R20>4.00166499e-007</R20>
								<R21>-1.31693841e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>1.07855703e-006</X>
								<Y>-1.98978043e-008</Y>
								<Z>-4.36352309e-007</Z>
								<R00>-0.999999642</R00>
								<R01>-1.87142232e-005</R01>
								<R02>-3.42939558e-007</R02>
								<R10>-1.87652277e-005</R10>
								<R11>1</R11>
								<R12>-1.32089617e-005</R12>
								<R20>4.00166499e-007</R20>
								<R21>-1.31693841e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Weld" referent="RBX174">
						<Properties>
							<CoordinateFrame name="C0">
								<X>-2.96131202e-006</X>
								<Y>1.15200116e-008</Y>
								<Z>-5.08313747e-008</Z>
								<R00>-0.999999583</R00>
								<R01>-2.1935306e-005</R01>
								<R02>-3.42888029e-007</R02>
								<R10>-2.19863105e-005</R10>
								<R11>1</R11>
								<R12>-1.28208176e-005</R12>
								<R20>4.00148849e-007</R20>
								<R21>-1.27812382e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<CoordinateFrame name="C1">
								<X>-2.96131202e-006</X>
								<Y>1.15200116e-008</Y>
								<Z>-5.08313747e-008</Z>
								<R00>-0.999999583</R00>
								<R01>-2.1935306e-005</R01>
								<R02>-3.42888029e-007</R02>
								<R10>-2.19863105e-005</R10>
								<R11>1</R11>
								<R12>-1.28208176e-005</R12>
								<R20>4.00148849e-007</R20>
								<R21>-1.27812382e-005</R21>
								<R22>-1.00000012</R22>
							</CoordinateFrame>
							<string name="Name">Weld</string>
							<Ref name="Part0">null</Ref>
							<Ref name="Part1">null</Ref>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Sound" referent="RBX175">
						<Properties>
							<bool name="Looped">false</bool>
							<string name="Name">OpenSound</string>
							<float name="Pitch">1</float>
							<int name="PlayCount">-1</int>
							<bool name="PlayOnRemove">false</bool>
							<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=16947656</url></Content>
							<float name="Volume">1</float>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
					<Item class="Sound" referent="RBX176">
						<Properties>
							<bool name="Looped">false</bool>
							<string name="Name">DrinkSound</string>
							<float name="Pitch">1</float>
							<int name="PlayCount">-1</int>
							<bool name="PlayOnRemove">false</bool>
							<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=12229501</url></Content>
							<float name="Volume">1</float>
							<bool name="archivable">true</bool>
						</Properties>
					</Item>
				</Item>
				<Item class="Script" referent="RBX177">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">SandwichScript</string>
						<ProtectedString name="Source">local Tool = script.Parent;

enabled = true

local ghostChar = nil

function makeMeGhostly(trans)


	if ghostChar == nil then return end
	local parts = {&quot;Head&quot;, &quot;Torso&quot;, &quot;Left Leg&quot;, &quot;Right Leg&quot;, &quot;Left Arm&quot;, &quot;Right Arm&quot;}

	for i=1,#parts do
		local p = ghostChar:FindFirstChild(parts[i])
		if p ~= nil then p.Transparency = trans end
	end

	
end

function UpdateGhostState(isUnequipping)

	if isUnequipping == true then
		makeMeGhostly(0)
		ghostChar = nil
	else
		ghostChar = Tool.Parent
		makeMeGhostly(.5)
	end
	

end

function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Tool.GripForward = Vector3.new(-.981, .196, 0)
	Tool.GripPos = Vector3.new(-.5, -0.6, -1.5)
	Tool.GripRight = Vector3.new(0, -0, -1)
	Tool.GripUp = Vector3.new(0.196, .981, 0)


	Tool.Handle.DrinkSound:Play()

	wait(.8)
	
	local h = Tool.Parent:FindFirstChild(&quot;Humanoid&quot;)
	if (h ~= nil) then
		UpdateGhostState(false)
	end

	Tool.GripForward = Vector3.new(-1, 0, 0)
	Tool.GripPos = Vector3.new(-.5, -.1, 0)
	Tool.GripRight = Vector3.new(0, 0, 1)
	Tool.GripUp = Vector3.new(0,1,0)


	enabled = true

end

function onEquipped()
	Tool.Handle.OpenSound:play()
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)



function onUnequipped()
	UpdateGhostState(true)
end



script.Parent.Unequipped:connect(onUnequipped)
</ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Camera" referent="RBX178">
					<Properties>
						<Ref name="CameraSubject">null</Ref>
						<token name="CameraType">0</token>
						<CoordinateFrame name="CoordinateFrame">
							<X>2.1645081</X>
							<Y>2.16833353</Y>
							<Z>1.6537621</Z>
							<R00>0.569680631</R00>
							<R01>-0.222054526</R01>
							<R02>0.791300058</R02>
							<R10>-7.42681205e-009</R10>
							<R11>0.962808907</R11>
							<R12>0.270183325</R12>
							<R20>-0.821866155</R20>
							<R21>-0.153918207</R21>
							<R22>0.548493564</R22>
						</CoordinateFrame>
						<CoordinateFrame name="Focus">
							<X>0.5</X>
							<Y>1.60000002</Y>
							<Z>0.5</Z>
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
						<string name="Name">ThumbnailCamera</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
		</Item>
		<Item class="Part" referent="RBX179">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>14</X>
					<Y>16.8000011</Y>
					<Z>2833</Z>
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
					<X>4</X>
					<Y>0.800000012</Y>
					<Z>4</Z>
				</Vector3>
			</Properties>
			<Item class="Script" referent="RBX180">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Regen</string>
					<ProtectedString name="Source">--Made by ?!?!?!?!, just group with the model to get it to work.  This button also works for planes.
--Do not change anything besides the lines mentioned below.Again,Group it to anything you want(Cars,Trains,Planes Etc.)

model = script.Parent.Parent--Indicates that the script interacts with the model the button is grouped with.


backup = model:clone()
enabled = true

function regenerate()
	model:remove()

	wait(3)--

	model = backup:clone()
	model.Parent = game.Workspace
	model:makeJoints()

	script.Disabled = true
	script.Parent.BrickColor = BrickColor.new(26)--Black
	wait(10)--Change this number to change the time in between regenerations via the button, in seconds..
	script.Parent.BrickColor = BrickColor.new(104)--Purple
	script.Disabled = false
end

function onHit(hit)
	if (hit.Parent:FindFirstChild(&quot;Humanoid&quot;) ~= nil) and enabled then
		regenerate()
	end
end

script.Parent.Touched:connect(onHit)

--Remember To read EVERYTHING on this button that includes the top &gt;_&gt; Edit it only for Pros.</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


