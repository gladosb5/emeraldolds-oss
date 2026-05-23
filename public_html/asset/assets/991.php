<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Tool" referent="RBX0">
		<Properties>
			<bool name="Enabled">true</bool>
			<CoordinateFrame name="Grip">
				<X>0</X>
				<Y>0</Y>
				<Z>-0.300000012</Z>
				<R00>1</R00>
				<R01>0.000126240688</R01>
				<R02>-0</R02>
				<R10>0</R10>
				<R11>-0</R11>
				<R12>-1</R12>
				<R20>-0.000126240688</R20>
				<R21>1</R21>
				<R22>-0</R22>
			</CoordinateFrame>
			<string name="Name">C3 Subspace gun</string>
			<Content name="TextureId"><null></null></Content>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Script" referent="RBX1">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">WeldScript</string>
				<ProtectedString name="Source">Tool = script.Parent


        w1 = Instance.new(&quot;Weld&quot;)
	w1.Parent = Tool.Handle	
	w1.Part0 = w1.Parent
	w1.Part1 = Tool.Handle1
	w1.C1 = CFrame.new(Vector3.new(0, -1.5, 0))

	w2 = Instance.new(&quot;Weld&quot;)
	w2.Parent = Tool.Handle
	w2.Part0 = w2.Parent
	w2.Part1 = Tool.Handle2
	w2.C1 = CFrame.new(Vector3.new(0, -2.3, 0))
	
	w3 = Instance.new(&quot;Weld&quot;)
	w3.Parent = Tool.Handle
	w3.Part0 = w3.Parent
	w3.Part1 = Tool.Handle3
	w3.C1 = CFrame.new(Vector3.new(0, -2.5, 0))
	
	w4 = Instance.new(&quot;Weld&quot;)
	w4.Parent = Tool.Handle
	w4.Part0 = w4.Parent
	w4.Part1 = Tool.I1
	w4.C1 = CFrame.new(Vector3.new(0, -1.9, 0.6)) * CFrame.fromEulerAnglesXYZ(-0.6, 0, 0)
	
	w5 = Instance.new(&quot;Weld&quot;)
	w5.Parent = Tool.Handle
	w5.Part0 = w5.Parent
	w5.Part1 = Tool.I2
	w5.C1 = CFrame.new(Vector3.new(0, -2.1, -1.6)) * CFrame.fromEulerAnglesXYZ(0.4, 0, 0)
	
	w6 = Instance.new(&quot;Weld&quot;)
	w6.Parent = Tool.Handle
	w6.Part0 = w6.Parent
	w6.Part1 = Tool.O1
	w6.C1 = CFrame.new(Vector3.new(-0.5, -1.9, 0)) * CFrame.fromEulerAnglesXYZ(0, -0.5, -0.5)

	w7 = Instance.new(&quot;Weld&quot;)
	w7.Parent = Tool.Handle
	w7.Part0 = w7.Parent
	w7.Part1 = Tool.O2
	w7.C1 = CFrame.new(Vector3.new(1.6, -2, -0.6)) * CFrame.fromEulerAnglesXYZ(0, 0.5, 0.5)

	w8 = Instance.new(&quot;Weld&quot;)
	w8.Parent = Tool.Handle
	w8.Part0 = w8.Parent
	w8.Part1 = Tool.P1
	w8.C1 = CFrame.new(Vector3.new(0.5, -1.9, 0)) * CFrame.fromEulerAnglesXYZ(0, 0.5, 0.5)

	w9 = Instance.new(&quot;Weld&quot;)
	w9.Parent = Tool.Handle
	w9.Part0 = w9.Parent
	w9.Part1 = Tool.P2
	w9.C1 = CFrame.new(Vector3.new(-1.6, -2, -0.6)) * CFrame.fromEulerAnglesXYZ(0, -0.5, -0.5)</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="LocalScript" referent="RBX2">
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

	wait(0.1)
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
		<Item class="Script" referent="RBX3">
			<Properties>
				<bool name="Disabled">true</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">BlackHole</string>
				<ProtectedString name="Source">wait(0.5)


local hole = script.Parent
local childList = {}

local massConstant = 10000 -- Generally a good value

local mass = 10000 * massConstant

function checkObject(obj) -- This is basically a function that finds all unanchored parts and adds them to childList.
	if (obj ~= hole) and (obj.className == &quot;Part&quot;) then
		if (obj.Anchored == false) then
			table.insert(childList, 1, obj)
		end
	elseif (obj.className == &quot;Model&quot;) or (obj.className == &quot;Hat&quot;) or (obj.className == &quot;Tool&quot;) or (obj == workspace) then
		local child = obj:GetChildren()
		for x = 1, #child do
			checkObject(child[x])
		end
		obj.ChildAdded:connect(checkObject)
	end
end

checkObject(workspace)

function cross(v1, v2)
	return Vector3.new(v1.y * v2.z - v2.y * v1.z, v1.z * v2.x - v1.x * v2.z, v1.x * v2.y - v2.x * v1.y)
end

print(&quot;Black Hole script loaded.&quot;)
local n = 0
while true do
	if n &lt; #childList then
		n = n + 1
		if n % 800 == 0 then
			wait()
		end
	else
		n = 1
		wait()
	end

	local child = childList[n]
	if (child ~= hole) and (child.className == &quot;Part&quot;) and (child.Anchored == false) then
		local relPos = hole.Position - child.Position
		local motivator = child:FindFirstChild(&quot;BlackHole Influence&quot;)
		if relPos.magnitude * 240 * massConstant &lt; mass then
			child.RotVelocity = cross(child.CFrame.lookVector, relPos) * 5 / relPos.magnitude
			child:BreakJoints()
			if (relPos.magnitude * 320 * massConstant &lt; mass) and (child.Size.z + hole.Size.x &gt;  relPos.magnitude * 2 - 4) then
				mass = mass + child:GetMass()
				child:Remove()
				table.remove(childList, n)
				n = n - 1 -- This is the reason I need a counter of my own design
			else
				child.CanCollide = false -- I can assume that the child will not escape the black hole.
				if motivator == nil then
					motivator = Instance.new(&quot;BodyPosition&quot;)
					motivator.Parent = child
					motivator.Name = &quot;BlackHole Influence&quot;
				end
				motivator.position = hole.Position
				motivator.maxForce = Vector3.new(100, 100, 100) * mass * child:GetMass() / (relPos.magnitude * massConstant)
			end
		elseif motivator ~= nil then
			motivator:Remove()
		end
	end
end</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX4">
			<Properties>
				<bool name="Disabled">true</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Paintball</string>
				<ProtectedString name="Source">ball = script.Parent
damage =999999999999999999999



function onTouched(hit)
	script.Parent.Anchored = true
	script.Parent.Size = Vector3.new(20,20,1)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	
	if humanoid ~= nil then
		tagHumanoid(humanoid)
		humanoid:TakeDamage(damage)
		wait(5)
		untagHumanoid(humanoid)
	end

	connection:disconnect()

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

connection = ball.Touched:connect(onTouched)</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX5">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">PaintballShooter</string>
				<ProtectedString name="Source">Tool = script.Parent

colors = {45, 119, 21, 24, 23, 105, 104}

function fire(v)

	Tool.Handle.Fire:play()
	Tool.Parent.Torso[&quot;Right Shoulder&quot;].DesiredAngle = 3			--moves your arm as if firing.
	

	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)

        

	local spawnPos = vCharacter.PrimaryPart.Position
	


	spawnPos  = spawnPos + (v * 8)

	missile.Position = spawnPos
	missile.Size = Vector3.new(1,1,1)
	missile.Velocity = v * 500
	missile.BrickColor = BrickColor.new(104)
	missile.Shape = 0
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Paintball&quot;
	missile.Elasticity = 0
	missile.Reflectance = 0
	missile.Friction = .9

	local force = Instance.new(&quot;BodyForce&quot;)
	force.force = Vector3.new(0,90,0)
	force.Parent = missile
	
	local new_script = script.Parent.Paintball:clone()
	new_script.Disabled = false
	new_script.Parent = missile

	local new_script2 = script.Parent.BlackHole:clone()
	new_script2.Disabled = false
	new_script2.Parent = missile

	local new_script3= script.Parent.BrickCleanUp:clone()
	new_script3.Disabled = false
	new_script3.Parent = missile

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

	wait(.1)

	Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)

</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX6">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>160.501587</X>
					<Y>0.996695638</Y>
					<Z>-8.00465393</Z>
					<R00>-0.51341325</R00>
					<R01>-0.858140945</R01>
					<R02>-0.00102347555</R02>
					<R10>0.000137624113</R10>
					<R11>-0.00127504184</R11>
					<R12>0.999999225</R12>
					<R20>-0.858141541</R20>
					<R21>0.513412654</R21>
					<R22>0.000772672007</R22>
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
				<string name="Name">Handle</string>
				<float name="Reflectance">0.400000006</float>
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
					<Y>2.4000001</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
			<Item class="SpecialMesh" referent="RBX7">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">3</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>1.5</X>
						<Y>1.60000002</Y>
						<Z>1.5</Z>
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
			<Item class="Weld" referent="RBX8">
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX9">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX10">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX11">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX12">
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX13">
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX14">
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX15">
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX16">
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Sound" referent="RBX17">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">Fire</string>
					<float name="Pitch">1</float>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><null></null></Content>
					<float name="Volume">1</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX18">
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX19">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX20">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX21">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX28">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX29">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX30">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX37">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX38">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX39">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX46">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX47">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX48">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX55">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX56">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX57">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX64">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX65">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX66">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX73">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX74">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">null</Ref>
					<Ref name="Part1">null</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX75">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX82</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX83">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX84</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX85">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX86</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX87">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX88</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX89">
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX90</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX91">
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX92</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX93">
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX94</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX95">
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX96</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX97">
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX98</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX99">
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX82</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX100">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX84</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX101">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX86</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX102">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX88</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX103">
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX90</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX104">
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX92</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX105">
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX94</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX106">
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX96</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX98</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX108">
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
						<Y>-1.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX82</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX109">
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
						<Y>-2.29999995</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX84</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX110">
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
						<Y>-2.5</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX86</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX111">
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
						<Y>-1.89999998</Y>
						<Z>0.600000024</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.825335622</R11>
						<R12>0.564642489</R12>
						<R20>0</R20>
						<R21>-0.564642489</R21>
						<R22>0.825335622</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX88</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX112">
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
						<Y>-2.0999999</Y>
						<Z>-1.60000002</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0.921060979</R11>
						<R12>-0.389418334</R12>
						<R20>0</R20>
						<R21>0.389418334</R21>
						<R22>0.921060979</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX90</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX113">
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
						<X>-0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX92</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX114">
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
						<X>1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX94</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
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
						<X>0.5</X>
						<Y>-1.89999998</Y>
						<Z>0</Z>
						<R00>0.770151138</R00>
						<R01>-0.420735508</R01>
						<R02>0.47942555</R02>
						<R10>0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>-0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX96</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX116">
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
						<X>-1.60000002</X>
						<Y>-2</Y>
						<Z>-0.600000024</Z>
						<R00>0.770151138</R00>
						<R01>0.420735508</R01>
						<R02>-0.47942555</R02>
						<R10>-0.47942555</R10>
						<R11>0.87758255</R11>
						<R12>0</R12>
						<R20>0.420735508</R20>
						<R21>0.229848862</R21>
						<R22>0.87758255</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX98</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX82">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>159.214371</X>
					<Y>0.994783103</Y>
					<Z>-7.23453522</Z>
					<R00>-0.51341325</R00>
					<R01>-0.858140945</R01>
					<R02>-0.00102347555</R02>
					<R10>0.000137624113</R10>
					<R11>-0.00127504184</R11>
					<R12>0.999999225</R12>
					<R20>-0.858141541</R20>
					<R21>0.513412654</R21>
					<R22>0.000772672007</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">Handle1</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX117">
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
						<Y>2</Y>
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
		<Item class="Part" referent="RBX84">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>158.527863</X>
					<Y>0.99376303</Y>
					<Z>-6.82380486</Z>
					<R00>-0.51341325</R00>
					<R01>-0.858140945</R01>
					<R02>-0.00102347555</R02>
					<R10>0.000137624113</R10>
					<R11>-0.00127504184</R11>
					<R12>0.999999225</R12>
					<R20>-0.858141541</R20>
					<R21>0.513412654</R21>
					<R22>0.000772672007</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">Handle2</string>
				<float name="Reflectance">0.400000006</float>
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
					<Y>0.400000006</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
			<Item class="SpecialMesh" referent="RBX118">
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
						<X>0.899999976</X>
						<Y>1.5</Y>
						<Z>0.899999976</Z>
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
		<Item class="Part" referent="RBX86">
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
				<int name="BrickColor">26</int>
				<CoordinateFrame name="CFrame">
					<X>158.356232</X>
					<Y>0.993508041</Y>
					<Z>-6.72112226</Z>
					<R00>-0.51341325</R00>
					<R01>-0.858140945</R01>
					<R02>-0.00102347555</R02>
					<R10>0.000137624113</R10>
					<R11>-0.00127504184</R11>
					<R12>0.999999225</R12>
					<R20>-0.858141541</R20>
					<R21>0.513412654</R21>
					<R22>0.000772672007</R22>
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
				<string name="Name">Handle3</string>
				<float name="Reflectance">0.400000006</float>
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
					<Y>0.400000006</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
			<Item class="SpecialMesh" referent="RBX119">
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
						<X>0.699999988</X>
						<Y>1.5</Y>
						<Z>0.699999988</Z>
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
		<Item class="Part" referent="RBX88">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>158.864594</X>
					<Y>1.57188308</Y>
					<Z>-7.02516937</Z>
					<R00>-0.51341325</R00>
					<R01>-0.708832204</R01>
					<R02>0.48369813</R02>
					<R10>0.000137624113</R10>
					<R11>0.563589752</R11>
					<R12>0.826054931</R12>
					<R20>-0.858141541</R20>
					<R21>0.424174041</R21>
					<R22>-0.289256901</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">I1</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX120">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">6</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.100000001</X>
						<Y>1</Y>
						<Z>0.100000001</Z>
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
		<Item class="Part" referent="RBX90">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>158.306396</X>
					<Y>1.6493535</Y>
					<Z>-6.69119835</Z>
					<R00>-0.51341325</R00>
					<R01>-0.790001571</R01>
					<R02>-0.335118502</R02>
					<R10>0.000137624113</R10>
					<R11>-0.390592426</R11>
					<R12>0.920563757</R12>
					<R20>-0.858141541</R20>
					<R21>0.472583473</R21>
					<R22>0.200643986</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">I2</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX121">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">6</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.100000001</X>
						<Y>1</Y>
						<Z>0.100000001</Z>
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
		<Item class="Part" referent="RBX92">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>159.1604</X>
					<Y>0.754516423</Y>
					<Z>-6.58952713</Z>
					<R00>-0.755965471</R00>
					<R01>-0.506946087</R01>
					<R02>-0.414152086</R02>
					<R10>-0.479855657</R10>
					<R11>-0.00118493498</R11>
					<R12>0.877346754</R12>
					<R20>-0.4452582</R20>
					<R21>0.861976981</R21>
					<R22>-0.242365211</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">O1</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX122">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">6</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.100000001</X>
						<Y>1</Y>
						<Z>0.100000001</Z>
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
		<Item class="Part" referent="RBX94">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>158.569595</X>
					<Y>0.752820075</Y>
					<Z>-6.23605537</Z>
					<R00>-0.0348461121</R00>
					<R01>-0.999233007</R01>
					<R02>0.0178702772</R02>
					<R10>0.480067611</R10>
					<R11>-0.00105297402</R11>
					<R12>0.877230942</R12>
					<R20>-0.876539171</R20>
					<R21>0.0391470194</R21>
					<R22>0.479736</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">O2</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX123">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">6</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.100000001</X>
						<Y>1</Y>
						<Z>0.100000001</Z>
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
		<Item class="Part" referent="RBX96">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>158.620468</X>
					<Y>0.754661202</Y>
					<Z>-7.49200487</Z>
					<R00>-0.0348461121</R00>
					<R01>-0.999233007</R01>
					<R02>0.0178702772</R02>
					<R10>0.480067611</R10>
					<R11>-0.00105297402</R11>
					<R12>0.877230942</R12>
					<R20>-0.876539171</R20>
					<R21>0.0391470194</R21>
					<R22>0.479736</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">P1</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX124">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">6</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.100000001</X>
						<Y>1</Y>
						<Z>0.100000001</Z>
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
		<Item class="Part" referent="RBX98">
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
				<int name="BrickColor">104</int>
				<CoordinateFrame name="CFrame">
					<X>158.029663</X>
					<Y>0.752964795</Y>
					<Z>-7.13853216</Z>
					<R00>-0.755965471</R00>
					<R01>-0.506946087</R01>
					<R02>-0.414152086</R02>
					<R10>-0.479855657</R10>
					<R11>-0.00118493498</R11>
					<R12>0.877346754</R12>
					<R20>-0.4452582</R20>
					<R21>0.861976981</R21>
					<R22>-0.242365211</R22>
				</CoordinateFrame>
				<bool name="CanCollide">false</bool>
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
				<string name="Name">P2</string>
				<float name="Reflectance">0.400000006</float>
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
			<Item class="SpecialMesh" referent="RBX125">
				<Properties>
					<token name="LODX">2</token>
					<token name="LODY">2</token>
					<Content name="MeshId"><null></null></Content>
					<token name="MeshType">6</token>
					<string name="Name">Mesh</string>
					<Vector3 name="Offset">
						<X>0</X>
						<Y>0</Y>
						<Z>0</Z>
					</Vector3>
					<Vector3 name="Scale">
						<X>0.100000001</X>
						<Y>1</Y>
						<Z>0.100000001</Z>
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
		<Item class="Script" referent="RBX126">
			<Properties>
				<bool name="Disabled">true</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">BrickCleanUp</string>
				<ProtectedString name="Source">wait(1)
script.Parent.Parent = nil
</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


