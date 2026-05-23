<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
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
				<R11>0.707106769</R11>
				<R12>-0.707106769</R12>
				<R20>-0</R20>
				<R21>0.707106769</R21>
				<R22>0.707106769</R22>
			</CoordinateFrame>
			<string name="Name">pizza rocket that is hot</string>
			<Content name="TextureId"><null></null></Content>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Part" referent="RBX1">
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
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-1.5</X>
					<Y>0.600000024</Y>
					<Z>-19.5</Z>
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
					<X>3</X>
					<Y>0.400000006</Y>
					<Z>3</Z>
				</Vector3>
			</Properties>
			<Item class="Decal" referent="RBX2">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=2246767</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Sound" referent="RBX3">
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
		<Item class="Sound" referent="RBX4">
			<Properties>
				<bool name="Looped">true</bool>
				<string name="Name">Swoosh</string>
				<float name="Pitch">1</float>
				<int name="PlayCount">-1</int>
				<bool name="PlayOnRemove">false</bool>
				<Content name="SoundId"><url>rbxasset://sounds\Rocket whoosh 01.wav</url></Content>
				<float name="Volume">0.699999988</float>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Script" referent="RBX5">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">RocketScript</string>
				<ProtectedString name="Source">r = game:service(&quot;RunService&quot;)

shaft = script.Parent
position = shaft.Position

script.Parent.Explosion.PlayOnRemove = true -- play explosion sound when projectile removed from game

function fly()
	direction = shaft.CFrame.lookVector 
	position = position  + direction * 20
	error = position - shaft.Position
	shaft.Velocity = 7*error
end

function blow()
	swoosh:stop()
	explosion = Instance.new(&quot;Explosion&quot;)
	explosion.Position = shaft.Position


	-- find instigator tag
	local creator = script.Parent:findFirstChild(&quot;creator&quot;)
	if creator ~= nil then
		explosion.Hit:connect(function(part, distance)  onPlayerBlownUp(part, distance, creator) end)
	end

	explosion.Parent = game.Workspace
	connection:disconnect()
	wait(1.5)
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
		<Item class="Script" referent="RBX6">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Server Launcher</string>
				<ProtectedString name="Source">local Rocket = Instance.new(&quot;Part&quot;)
local Tool = script.Parent

Rocket.Locked = true
Rocket.BackSurface = 3
Rocket.BottomSurface = 3
Rocket.FrontSurface = 3
Rocket.LeftSurface = 3
Rocket.RightSurface = 3
Rocket.TopSurface = 3
Rocket.Size = Vector3.new(1,1,4)
Rocket.BrickColor = BrickColor.new(23)

Tool.RocketScript:clone().Parent = Rocket
Tool.Explosion:clone().Parent = Rocket
Tool.Swoosh:clone().Parent = Rocket


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

	missile.Parent = game.Workspace
end

function computeDirection(vec)
	local lenSquared = vec.magnitude * vec.magnitude
	local invSqrt = 1 / math.sqrt(lenSquared)
	return Vector3.new(vec.x * invSqrt, vec.y * invSqrt, vec.z * invSqrt)
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

	wait(0)

	Tool.Enabled = true
end


script.Parent.Activated:connect(onActivated)

</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


