<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Tool" referent="RBX0">
		<Properties>
			<bool name="Enabled">true</bool>
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
			<string name="Name">ClassicSuperball</string>
			<Content name="TextureId"><url>rbxasset://Textures/Superball.png</url></Content>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="LocalScript" referent="RBX1">
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

	wait(2)
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
		<Item class="Script" referent="RBX2">
			<Properties>
				<bool name="Disabled">true</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">CannonBall</string>
				<ProtectedString name="Source">local Ball = script.Parent
local damage = 25

local r = game:service(&quot;RunService&quot;)
local debris = game:GetService(&quot;Debris&quot;)

local last_sound_time = r.Stepped:wait()

function onTouched(hit)
	if hit.Parent == nil then return end 
	local now = r.Stepped:wait()
	if (now - last_sound_time &gt; .1) then
		Ball.Boing:play()
		last_sound_time = now
	else
		return
	end

	local humanoid = hit.Parent:FindFirstChild(&quot;Humanoid&quot;)	
	if humanoid ~=nil then
		tagHumanoid(humanoid)		
		humanoid.Health = humanoid.Health - damage	
		if connection then connection:disconnect() end
	else
		damage = damage / 2
		if damage &lt; 2 then
			if connection then connection:disconnect() end
		end
	end
end

function tagHumanoid(humanoid)	
	local tag = Ball:findFirstChild(&quot;creator&quot;)
	if tag ~= nil then
		local new_tag = tag:clone()
		new_tag.Parent = humanoid
		debris:AddItem(new_tag, 2)
	end
end


connection = Ball.Touched:connect(onTouched)

t, s = r.Stepped:wait()
d = t + 5.0 - s
while t &lt; d do
	t = r.Stepped:wait()
end

Ball.Parent = nil</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX3">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">CannonScript</string>
				<ProtectedString name="Source">local Tool = script.Parent
local Ball = Tool.Handle

function fire(direction)

	Tool.Handle.Boing:Play()

	local vCharacter = Tool.Parent
	local vPlayer = game.Players:playerFromCharacter(vCharacter)

	local missile = Instance.new(&quot;Part&quot;)       

	local spawnPos = vCharacter.PrimaryPart.Position

	spawnPos  = spawnPos + (direction * 5)

	missile.Position = spawnPos
	missile.Size = Vector3.new(2,2,2)
	missile.Velocity = direction * 200
	missile.BrickColor = BrickColor.random() 
	missile.Shape = 0
	missile.BottomSurface = 0
	missile.TopSurface = 0
	missile.Name = &quot;Cannon Shot&quot;
	missile.Elasticity = 1
	missile.Reflectance = .2
	missile.Friction = 0

	Tool.Handle.Boing:clone().Parent = missile
	
	local new_script = script.Parent.CannonBall:clone()
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


Tool.Activated:connect(onActivated)

</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX4">
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
				<int name="BrickColor">21</int>
				<CoordinateFrame name="CFrame">
					<X>-2</X>
					<Y>3</Y>
					<Z>-4</Z>
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
				<float name="Elasticity">1</float>
				<token name="FormFactor">0</token>
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
				<string name="Name">Handle</string>
				<float name="Reflectance">0.200000003</float>
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
				<token name="shape">0</token>
				<Vector3 name="size">
					<X>2</X>
					<Y>2</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
			<Item class="Sound" referent="RBX5">
				<Properties>
					<bool name="Looped">false</bool>
					<string name="Name">Boing</string>
					<float name="Pitch">1</float>
					<int name="PlayCount">-1</int>
					<bool name="PlayOnRemove">false</bool>
					<Content name="SoundId"><url>rbxasset://sounds//short spring sound.wav</url></Content>
					<float name="Volume">1</float>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


