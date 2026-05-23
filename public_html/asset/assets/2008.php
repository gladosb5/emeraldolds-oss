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
			<string name="Name">Killbot</string>
			<Ref name="PrimaryPart">RBX1</Ref>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Script" referent="RBX2">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">KillbotScript</string>
				<ProtectedString name="Source">local sphere = script.Parent.Sphere

local myTarget = nil


-- obtain goals based on Sphere part
sphere.BodyPosition.position = sphere.Position





-- this code hijacked from the new rocket launcher
local Rocket = Instance.new(&quot;Part&quot;)
Rocket.Locked = true
Rocket.BackSurface = 3
Rocket.BottomSurface = 3
Rocket.FrontSurface = 3
Rocket.LeftSurface = 3
Rocket.RightSurface = 3
Rocket.TopSurface = 3
Rocket.Size = Vector3.new(1,1,4)
Rocket.BrickColor = BrickColor.new(21)
script.Parent.RocketScript:clone().Parent = Rocket
script.Parent.Explosion:clone().Parent = Rocket
script.Parent.Swoosh:clone().Parent = Rocket


function fire(target)
	

	local dir = target - sphere.Position
	dir = computeDirection(dir)


	local missile = Rocket:clone()

	local spawnPos = sphere.Position

	local pos = spawnPos + (dir * 8)
	
	--missile.Position = pos
	missile.CFrame = CFrame.new(pos,  pos + dir)

	
	missile.RocketScript.Disabled = false
	missile.Parent = game.Workspace

end

function computeDirection(vec)
	local lenSquared = vec.magnitude * vec.magnitude
	local invSqrt = 1 / math.sqrt(lenSquared)
	return Vector3.new(vec.x * invSqrt, vec.y * invSqrt, vec.z * invSqrt)
end

function scanForHumans()
	-- KILL THE HUMANS!!!!!!!!!!

	-- for now, pick a random one. In the future, pick the closest. Or use hit test to pick a visible one.
	local humansFound = {}

	local players = game.Players:children()

	if (#players &lt; 1) then return end

	local i = math.random(1, #players)

	myTarget = players[i].Character
	
end

function moveKillbot()
	
	-- killbots move using a biased random walk toward the target
	-- they also like to float at least 10 studs above the ground

	local dx = math.random(-100,100)
	local dy = math.random(-40,40)
	local dz = math.random(-100,100)

	if (sphere.Position.y &lt; 10 and dy &lt; 0) then dy = -dy end
	if (sphere.Position.y &gt; 80 and dy &gt; 0) then dy = -dy end

	if (myTarget ~= nil) then
		local dir = computeDirection(myTarget.PrimaryPart.Position - sphere.Position)
		dx = dx + (dir.x * 80) -- change this number to alter player trophism
		dz = dz + (dir.z * 80)
	end

	local vec = computeDirection(Vector3.new(dx,dy,dz))

	sphere.BodyPosition.position = sphere.Position + (vec * 40) -- change this number to alter speed
	

end

function onTouched(hit)
	local humanoid = hit.Parent:findFirstChild(&quot;Humanoid&quot;)
	if humanoid~=nil then
		humanoid.Health = humanoid.Health - 2000 -- Killbots kill you when you touch them! duh.
	else
		-- sadly, there is no good way to give a killbot hit points, so one hit with any weapon kills them
		script.Parent.Parent = nil
	end
end

sphere.Touched:connect(onTouched)

while true do  -- loop forever
	scanForHumans()

	for n=1,5 do
		if (myTarget ~= nil) then
			if(math.random(1,3) == 2) then fire(myTarget.PrimaryPart.Position) end
			wait(math.random(1,2))
			moveKillbot()
			wait(math.random(1,2))
		end
	end
	wait(.1) -- don&apos;t hog CPU
end
</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX1">
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
				<int name="BrickColor">226</int>
				<CoordinateFrame name="CFrame">
					<X>0.476284981</X>
					<Y>30.8103752</Y>
					<Z>0.0575828552</Z>
					<R00>-1</R00>
					<R01>-1.00761675e-017</R01>
					<R02>-1.00761675e-017</R02>
					<R10>-1.00761675e-017</R10>
					<R11>1</R11>
					<R12>1.00761675e-017</R12>
					<R20>1.00761675e-017</R20>
					<R21>1.00761675e-017</R21>
					<R22>-1</R22>
				</CoordinateFrame>
				<bool name="CanCollide">true</bool>
				<bool name="DraggingV1">false</bool>
				<float name="Elasticity">0.5</float>
				<token name="FormFactor">0</token>
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
				<string name="Name">Sphere</string>
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
					<Y>4</Y>
					<Z>4</Z>
				</Vector3>
			</Properties>
			<Item class="BodyPosition" referent="RBX3">
				<Properties>
					<float name="D">10000</float>
					<string name="Name">BodyPosition</string>
					<float name="P">10000</float>
					<bool name="archivable">true</bool>
					<Vector3 name="maxForce">
						<X>4000</X>
						<Y>400000</Y>
						<Z>4000</Z>
					</Vector3>
					<Vector3 name="position">
						<X>-43.911911</X>
						<Y>35.0198212</Y>
						<Z>2.94402981</Z>
					</Vector3>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX4">
				<Properties>
					<token name="Face">3</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://emeraldolds.glados.pro/asset/?id=2001</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX5">
				<Properties>
					<token name="Face">0</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://emeraldolds.glados.pro/asset/?id=2001</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX6">
				<Properties>
					<token name="Face">4</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://emeraldolds.glados.pro/asset/?id=2001</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX7">
				<Properties>
					<token name="Face">5</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://emeraldolds.glados.pro/asset/?id=2001</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX8">
				<Properties>
					<token name="Face">2</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://emeraldolds.glados.pro/asset/?id=2001</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX9">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://emeraldolds.glados.pro/asset/?id=2001</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Script" referent="RBX10">
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
	position = position + direction
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
	wait(.1)
	shaft:remove()
end

function onPlayerBlownUp(part, distance, creator)
	
	if part.Name == &quot;Head&quot; then
	
		local humanoid = part.Parent:findFirstChild(&quot;Humanoid&quot;)
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
		<Item class="Sound" referent="RBX11">
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
		<Item class="Sound" referent="RBX12">
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
	</Item>
</roblox>


