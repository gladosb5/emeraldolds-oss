<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="Part" referent="RBX0">
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
			<int name="BrickColor">21</int>
			<CoordinateFrame name="CFrame">
				<X>-3.5</X>
				<Y>7.79174852</Y>
				<Z>6.5</Z>
				<R00>1</R00>
				<R01>1.26244925e-018</R01>
				<R02>5.3109645e-020</R02>
				<R10>-1.26244925e-018</R10>
				<R11>1</R11>
				<R12>-3.09102237e-018</R12>
				<R20>-5.3109645e-020</R20>
				<R21>3.09102237e-018</R21>
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
			<string name="Name">Part</string>
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
				<X>11</X>
				<Y>14.8000002</Y>
				<Z>1</Z>
			</Vector3>
		</Properties>
		<Item class="Script" referent="RBX1">
			<Properties>
				<bool name="Disabled">false</bool>
				<Content name="LinkedSource"><null></null></Content>
				<string name="Name">Script</string>
				<ProtectedString name="Source">print (&quot;VIP T-Shirt Door Script Loaded&quot;)

-- list of account names allowed to go through the door.
permission = { &quot;YourNameHere&quot; } -- This is how many people can still get through, so u don&apos;t have to change shirts. You can also have another friend here.

-- TextureId of the VIP shirt.
texture = &quot;YourTextureHere&quot; -- Go to the wiki below this script to find out how to change the shirt. And paste the link in between the &quot;&quot; marks.

function checkOkToLetIn(name) 
	for i = 1,#permission do 
		-- convert strings to all upper case, otherwise we will let in 
		-- &quot;Username&quot; but not &quot;username&quot; or &quot;uSERNAME&quot; 
		if (string.upper(name) == string.upper(permission[i])) then return true end 
	end 
	return false 
end 

local Door = script.Parent

function onTouched(hit) 
	print(&quot;Door Hit&quot;) 
	local human = hit.Parent:findFirstChild(&quot;Humanoid&quot;) 
	if (human ~= nil ) then 
		if human.Parent.Torso.roblox.Texture == texture then --the shirt 
			Door.Transparency = 0.7 
			Door.CanCollide = false 
			wait(4) -- this is how long the door is open 
			Door.CanCollide = true 
			Door.Transparency = 0 
			-- a human has touched this door! 
			print(&quot;Human touched door&quot;) 
			-- test the human&apos;s name against the permission list 
		elseif (checkOkToLetIn(human.Parent.Name)) then 
			print(&quot;Human passed test&quot;) 
			Door.Transparency = 0.7
			Door.CanCollide = false 
			wait(4) -- this is how long the door is open
			Door.CanCollide = true 
			Door.Transparency = 0 
		else human.Health = 0 -- delete this line of you want a non-killing VIP door 
		end 
	end 
end 

script.Parent.Touched:connect(onTouched)
</ProtectedString>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


