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
			<string name="Name">Vending Machine</string>
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
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">26</int>
				<CoordinateFrame name="CFrame">
					<X>-12.5</X>
					<Y>1.80000007</Y>
					<Z>44.5</Z>
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
				<token name="FormFactor">1</token>
				<float name="Friction">0.300000012</float>
				<float name="FrontParamA">-0.5</float>
				<float name="FrontParamB">0.5</float>
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">trans</string>
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
					<X>-60</X>
					<Y>-0</Y>
					<Z>-0</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>3</X>
					<Y>0.400000006</Y>
					<Z>3</Z>
				</Vector3>
			</Properties>
			<Item class="Script" referent="RBX2">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Force Script</string>
					<ProtectedString name="Source">--SoundStudioRoblox--

while true do
script.Parent.Velocity = script.Parent.CFrame.lookVector *60
wait(0.1)
end
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX3">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1001</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>2.60000014</Y>
					<Z>44</Z>
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
				<string name="Name">Part</string>
				<float name="Reflectance">0.300000012</float>
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
					<X>2</X>
					<Y>2</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX4">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-12.5</X>
					<Y>1</Y>
					<Z>46</Z>
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
					<X>8</X>
					<Y>1.20000005</Y>
					<Z>5</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX5">
			<Properties>
				<bool name="Anchored">true</bool>
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
					<X>-13</X>
					<Y>3.4000001</Y>
					<Z>46</Z>
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
				<string name="Name">Tray</string>
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
					<X>6</X>
					<Y>0.400000006</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX6">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>2.4000001</Y>
					<Z>45.5</Z>
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
					<Y>1.60000002</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX7">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-12.5</X>
					<Y>10.1999998</Y>
					<Z>46</Z>
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
					<X>8</X>
					<Y>0.400000006</Y>
					<Z>5</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX8">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>3.4000001</Y>
					<Z>47</Z>
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
					<Y>0.400000006</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX9">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1001</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>5.4000001</Y>
					<Z>43.5</Z>
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
				<string name="Name">Part</string>
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
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>1</X>
					<Y>3.60000014</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX10">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>5.70000029</Y>
					<Z>43.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">SpriteB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX11">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX12">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=34402643</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX13">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Sprite
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		d.Name = &quot;7up&quot;
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX14">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>6.80000019</Y>
					<Z>46.5</Z>
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
				<token name="TopSurface">0</token>
				<token name="TopSurfaceInput">0</token>
				<float name="Transparency">0.699999988</float>
				<Vector3 name="Velocity">
					<X>0</X>
					<Y>0</Y>
					<Z>0</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>5</X>
					<Y>6.4000001</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX15">
			<Properties>
				<bool name="Anchored">true</bool>
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
					<X>-13</X>
					<Y>5</Y>
					<Z>46</Z>
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
				<string name="Name">Tray</string>
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
					<X>6</X>
					<Y>0.400000006</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX16">
			<Properties>
				<bool name="Anchored">true</bool>
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
					<X>-13</X>
					<Y>6.5999999</Y>
					<Z>46</Z>
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
				<string name="Name">Tray</string>
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
					<X>6</X>
					<Y>0.400000006</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX17">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>5.80000019</Y>
					<Z>42.5</Z>
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
					<Y>8.40000057</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX18">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1001</int>
				<CoordinateFrame name="CFrame">
					<X>-12</X>
					<Y>1.80000007</Y>
					<Z>48.5</Z>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">trans</string>
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
					<X>60</X>
					<Y>-0</Y>
					<Z>-0</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>4</X>
					<Y>0.400000006</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
			<Item class="Script" referent="RBX19">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Force Script</string>
					<ProtectedString name="Source">--SoundStudioRoblox--

while true do
script.Parent.Velocity = script.Parent.CFrame.lookVector *60
wait(0.1)
end
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX20">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-14.5</X>
					<Y>5.80000019</Y>
					<Z>46</Z>
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
					<X>6</X>
					<Y>8.40000057</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Tool" referent="RBX21">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">Milk</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX22">
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
						<X>-12.4994812</X>
						<Y>4.18986988</Y>
						<Z>44.5002136</Z>
						<R00>-0.999999881</R00>
						<R01>1.47458081e-008</R01>
						<R02>5.14388084e-005</R02>
						<R10>1.4684872e-008</R10>
						<R11>1</R11>
						<R12>-1.18737671e-006</R12>
						<R20>-5.14388084e-005</R20>
						<R21>-1.1873758e-006</R21>
						<R22>-0.999999881</R22>
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
						<X>0.00603543408</X>
						<Y>-1.38558266e-006</Y>
						<Z>0.000995057402</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-0.000266528601</X>
						<Y>-0.00135514594</Y>
						<Z>-0.000699184719</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Sound" referent="RBX23">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX24">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX25">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=17230208</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=26024079</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX26">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX27">
			<Properties>
				<bool name="Anchored">true</bool>
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
					<X>-13</X>
					<Y>8.19999981</Y>
					<Z>46</Z>
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
				<string name="Name">Tray</string>
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
					<X>6</X>
					<Y>0.400000006</Y>
					<Z>2</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX28">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-12.5</X>
					<Y>5.80000019</Y>
					<Z>49.5</Z>
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
					<Y>8.40000057</Y>
					<Z>5</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX29">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1001</int>
				<CoordinateFrame name="CFrame">
					<X>-10.5</X>
					<Y>8.60000038</Y>
					<Z>43.5</Z>
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
					<Y>2.79999995</Y>
					<Z>1</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Tool" referent="RBX30">
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
				<string name="Name">Doritos</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX31">
				<Properties>
					<bool name="Anchored">true</bool>
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
						<X>-13.5</X>
						<Y>9</Y>
						<Z>48.5</Z>
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
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Decal" referent="RBX32">
					<Properties>
						<token name="Face">5</token>
						<string name="Name">Decal</string>
						<float name="Shiny">20</float>
						<float name="Specular">0</float>
						<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=7997660</url></Content>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX33">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=15047813</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX34">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=16213987</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX35">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=19106014</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>0.699999988</X>
							<Y>0.699999988</Y>
							<Z>0.699999988</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=37305301</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX36">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">SandwichScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true




function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Tool.GripForward = Vector3.new(0.675, -0.675, -0.3)
	Tool.GripPos = Vector3.new(0.4, -0.9, 0.9)
	Tool.GripRight = Vector3.new(0.212, -0.212, 0.954)
	Tool.GripUp = Vector3.new(0.707, 0.707, 0)


	Tool.Handle.DrinkSound:Play()

	wait(.8)
	
	local h = Tool.Parent:FindFirstChild(&quot;Humanoid&quot;)
	if (h ~= nil) then
		if (h.MaxHealth &gt; h.Health + 1.6) then
			h.Health = h.Health + 1.6
		else	
			h.Health = h.MaxHealth
		end
	end

	Tool.GripForward = Vector3.new(-1, 0, 0)
	Tool.GripPos = Vector3.new(.2, 0, 0)
	Tool.GripRight = Vector3.new(0, 0, -1)
	Tool.GripUp = Vector3.new(0,1,0)


	enabled = true

end

function onEquipped()
	Tool.Handle.OpenSound:play()
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX37">
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
				<string name="Name">Waffle</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX38">
				<Properties>
					<bool name="Anchored">true</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">23</int>
					<CoordinateFrame name="CFrame">
						<X>-13.5</X>
						<Y>9</Y>
						<Z>46.5</Z>
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
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX39">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=20939848</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>0.699999988</X>
							<Y>0.699999988</Y>
							<Z>0.699999988</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=20939838</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX40">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true

function onButton1Down(mouse)
	if not enabled  then
		return
	end

	enabled = false
	Tool.GripForward = Vector3.new(-0,-0,1)
	Tool.GripPos = Vector3.new(-1.5, -0.7, -0.3)
	Tool.GripRight = Vector3.new(-1, 0, 0)
	Tool.GripUp = Vector3.new(0, 1, 0)
	wait(1)
	Tool.GripForward = Vector3.new(-0,-0,1)
	Tool.GripPos = Vector3.new(-1.5, -0.7, 0.2)
	Tool.GripRight = Vector3.new(-1, 0, 0)
	Tool.GripUp = Vector3.new(0, 1, 0)
	wait(1)
	Tool.GripForward = Vector3.new(-0,-0,1)
	Tool.GripPos = Vector3.new(-1.5, -0.7, 0.6)
	Tool.GripRight = Vector3.new(-1, 0, 0)
	Tool.GripUp = Vector3.new(0, 1, 0)
	wait(1)
	Tool.Parent.Humanoid.Health = Tool.Parent.Humanoid.Health - 0
	script.Parent:remove()

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\ArrowCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX41">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">0</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1001</int>
				<CoordinateFrame name="CFrame">
					<X>-12</X>
					<Y>1.80000007</Y>
					<Z>47</Z>
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
				<string name="Name">Holder</string>
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
					<X>-0</X>
					<Y>-0</Y>
					<Z>60</Z>
				</Vector3>
				<bool name="archivable">true</bool>
				<token name="shape">1</token>
				<Vector3 name="size">
					<X>2</X>
					<Y>0.400000006</Y>
					<Z>4</Z>
				</Vector3>
			</Properties>
			<Item class="Script" referent="RBX42">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Force Script</string>
					<ProtectedString name="Source">--SoundStudioRoblox--

while true do
script.Parent.Velocity = script.Parent.CFrame.lookVector *60
wait(0.1)
end
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX43">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0.100000001</X>
					<Y>-0.300000012</Y>
					<Z>0</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>-1</R12>
					<R20>-1</R20>
					<R21>0</R21>
					<R22>0</R22>
				</CoordinateFrame>
				<string name="Name">Cookie</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=21616307</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX44">
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
						<X>-13.600174</X>
						<Y>8.89045429</Y>
						<Z>44.500061</Z>
						<R00>3.15904617e-006</R00>
						<R01>-1</R01>
						<R02>4.61935997e-005</R02>
						<R10>1</R10>
						<R11>3.21865082e-006</R11>
						<R12>2.98023224e-008</R12>
						<R20>-5.96046448e-008</R20>
						<R21>4.61637974e-005</R21>
						<R22>0.99999994</R22>
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
						<X>0.00470635435</X>
						<Y>0.00019551006</Y>
						<Z>0.00497641088</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-0.000239693967</X>
						<Y>-0.00321257627</Y>
						<Z>-0.000197545101</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>0.800000012</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="StringValue" referent="RBX45">
					<Properties>
						<string name="Name">Type</string>
						<string name="Value">Cookie</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX46">
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
				<Item class="Weld" referent="RBX47">
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
				<Item class="Weld" referent="RBX48">
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
				<Item class="Weld" referent="RBX49">
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
				<Item class="Weld" referent="RBX50">
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
				<Item class="Weld" referent="RBX51">
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
				<Item class="Weld" referent="RBX52">
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
				<Item class="Weld" referent="RBX53">
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
				<Item class="Weld" referent="RBX54">
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
				<Item class="Weld" referent="RBX55">
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
				<Item class="Weld" referent="RBX56">
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
				<Item class="Weld" referent="RBX57">
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
				<Item class="Weld" referent="RBX58">
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
				<Item class="Weld" referent="RBX59">
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
				<Item class="Weld" referent="RBX60">
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
				<Item class="Weld" referent="RBX61">
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
				<Item class="Weld" referent="RBX62">
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
				<Item class="Weld" referent="RBX63">
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
				<Item class="Weld" referent="RBX64">
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
				<Item class="Weld" referent="RBX65">
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
				<Item class="Weld" referent="RBX66">
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
				<Item class="Weld" referent="RBX67">
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
				<Item class="Weld" referent="RBX68">
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
				<Item class="Weld" referent="RBX69">
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
				<Item class="Weld" referent="RBX70">
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
				<Item class="Weld" referent="RBX71">
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
				<Item class="Weld" referent="RBX72">
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
				<Item class="Weld" referent="RBX73">
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
				<Item class="Weld" referent="RBX74">
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
				<Item class="Weld" referent="RBX75">
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
				<Item class="Weld" referent="RBX76">
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
				<Item class="Weld" referent="RBX77">
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
				<Item class="Weld" referent="RBX78">
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
				<Item class="Weld" referent="RBX79">
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
				<Item class="Weld" referent="RBX80">
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
				<Item class="Weld" referent="RBX81">
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
				<Item class="Weld" referent="RBX82">
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
				<Item class="Weld" referent="RBX83">
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
				<Item class="Weld" referent="RBX84">
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
				<Item class="Weld" referent="RBX85">
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
				<Item class="Weld" referent="RBX86">
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
				<Item class="Weld" referent="RBX87">
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
				<Item class="Weld" referent="RBX88">
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
				<Item class="Weld" referent="RBX89">
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
				<Item class="Weld" referent="RBX90">
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
				<Item class="Weld" referent="RBX91">
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
				<Item class="Weld" referent="RBX92">
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
				<Item class="Weld" referent="RBX93">
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
				<Item class="Weld" referent="RBX94">
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
				<Item class="Weld" referent="RBX95">
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
				<Item class="Weld" referent="RBX96">
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
				<Item class="Weld" referent="RBX97">
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
				<Item class="Weld" referent="RBX98">
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
				<Item class="Weld" referent="RBX99">
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
				<Item class="Weld" referent="RBX100">
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
				<Item class="Weld" referent="RBX101">
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
				<Item class="Weld" referent="RBX102">
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
				<Item class="Weld" referent="RBX103">
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
				<Item class="Weld" referent="RBX104">
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
				<Item class="Weld" referent="RBX105">
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
				<Item class="Weld" referent="RBX106">
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
				<Item class="Weld" referent="RBX107">
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
				<Item class="Weld" referent="RBX108">
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
				<Item class="Weld" referent="RBX109">
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
				<Item class="Weld" referent="RBX110">
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
				<Item class="Weld" referent="RBX111">
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
				<Item class="Weld" referent="RBX112">
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
				<Item class="Weld" referent="RBX113">
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
				<Item class="Weld" referent="RBX114">
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
				<Item class="Weld" referent="RBX115">
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
				<Item class="Weld" referent="RBX116">
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
				<Item class="Weld" referent="RBX117">
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
				<Item class="Weld" referent="RBX118">
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
				<Item class="Sound" referent="RBX119">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">EatSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=15047813</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX120">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=20939848</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>0.400000006</X>
							<Y>0.400000006</Y>
							<Z>0.400000006</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=21456464</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="NumberValue" referent="RBX121">
				<Properties>
					<string name="Name">Bites</string>
					<double name="Value">5</double>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="StringValue" referent="RBX122">
				<Properties>
					<string name="Name">Info</string>
					<string name="Value">Cookie</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX123">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">CookieScript</string>
					<ProtectedString name="Source">local Tool = script.Parent

enabled = true




function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Tool.GripForward = Vector3.new(0.439, 0.878, 0.189)
	Tool.GripPos = Vector3.new(-0.3, 1.2, -1.3)
	Tool.GripRight = Vector3.new(0.0844, 0.169, -0.982)
	Tool.GripUp = Vector3.new(0.894, -0.347, 0)


	Tool.Handle.EatSound:Play()

script.Parent.Bites.Value = script.Parent.Bites.Value + 1
	wait(.8)
	
Eable()
	local h = Tool.Parent:FindFirstChild(&quot;Humanoid&quot;)
	if (h ~= nil) then
		if (h.MaxHealth &gt; h.Health + 1.6) then
			h.Health = h.Health + 1.6
		else	
			h.Health = h.MaxHealth
		end
	end

	Tool.GripForward = Vector3.new(-1, 1, -0)
	Tool.GripPos = Vector3.new(0.1, -0.3, 0)
	Tool.GripRight = Vector3.new(0,0, -1)
	Tool.GripUp = Vector3.new(1,0,0)


	enabled = true

end

function onEquipped()

end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)


script.Parent.Handle.Touched:connect(onTouched)

function Eable()
if (script.Parent.Bites.Value) &gt; 2 then 
script.Parent:Remove()
end
end

</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX124">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">PUT THIS IN THE WEAPON</string>
					<ProtectedString name="Source">local debounce = false

function getPlayer(humanoid) 
local players = game.Players:children() 
for i = 1, #players do 
if players[i].Character.Humanoid == humanoid then return players[i] end 
end 
return nil 
end 

function onTouch(part) 

local human = part.Parent:findFirstChild(&quot;Humanoid&quot;) 
if (human ~= nil) and debounce == false then

debounce = true

local player = getPlayer(human) 

if (player == nil) then return end 

script.Parent:clone().Parent = player.Backpack

wait(2)
debounce = false
end
end


script.Parent.Parent.Touched:connect(onTouch) 
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX125">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">DrPepper</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX126">
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
						<X>-12.500061</X>
						<Y>5.78986931</Y>
						<Z>46.5</Z>
						<R00>-0.999999881</R00>
						<R01>3.85996645e-006</R01>
						<R02>2.24709511e-005</R02>
						<R10>3.8600092e-006</R10>
						<R11>1</R11>
						<R12>1.91556478e-006</R12>
						<R20>-2.24709511e-005</R20>
						<R21>1.91565096e-006</R21>
						<R22>-0.999999881</R22>
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
						<X>0.00702088699</X>
						<Y>8.58478977e-009</Y>
						<Z>0.00109017396</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.000300716842</X>
						<Y>0.0015472169</Y>
						<Z>0.000421024015</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX127">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=10470609</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>1.20000005</X>
							<Y>1.20000005</Y>
							<Z>1.20000005</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=38857290</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX128">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX129">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX130">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX131">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">MountainDew</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX132">
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
						<X>-12.4998627</X>
						<Y>5.78986931</Y>
						<Z>48.5003052</Z>
						<R00>7.33915585e-005</R00>
						<R01>-1.85645104e-006</R01>
						<R02>-1</R02>
						<R10>-3.10328369e-006</R10>
						<R11>1</R11>
						<R12>-1.85667886e-006</R12>
						<R20>1</R20>
						<R21>3.10342011e-006</R21>
						<R22>7.33915585e-005</R22>
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
						<X>0.00231485884</X>
						<Y>0.000948086381</Y>
						<Z>-0.000250845711</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>6.78749057e-005</X>
						<Y>-0.00556840654</Y>
						<Z>0.00109138631</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX133">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=10470609</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>1.20000005</X>
							<Y>1.20000005</Y>
							<Z>1.20000005</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=29796694</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX134">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX135">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX136">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX137">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">Sprite</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX138">
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
						<X>-12.499939</X>
						<Y>4.18986988</Y>
						<Z>48.5001526</Z>
						<R00>-5.14607382e-005</R00>
						<R01>2.34541517e-006</R01>
						<R02>-1</R02>
						<R10>1.74836384e-006</R10>
						<R11>1</R11>
						<R12>2.34532513e-006</R12>
						<R20>1</R20>
						<R21>-1.74824311e-006</R21>
						<R22>-5.14607455e-005</R22>
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
						<X>-0.00986882951</X>
						<Y>0.00100945553</Y>
						<Z>-0.00187456713</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-0.000617539801</X>
						<Y>0.000123071572</Y>
						<Z>0.000349224661</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX139">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=10470609</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>1.20000005</X>
							<Y>1.20000005</Y>
							<Z>1.20000005</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=19444172</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX140">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX141">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX142">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX143">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>6.70000029</Y>
					<Z>43.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">AWB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX144">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX145">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=27158173</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX146">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.DrPepper
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX147">
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
				<string name="Name">EpicSnack</string>
				<Content name="TextureId"><null></null></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX148">
				<Properties>
					<bool name="Anchored">true</bool>
					<float name="BackParamA">-0.5</float>
					<float name="BackParamB">0.5</float>
					<token name="BackSurface">0</token>
					<token name="BackSurfaceInput">0</token>
					<float name="BottomParamA">-0.5</float>
					<float name="BottomParamB">0.5</float>
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">1009</int>
					<CoordinateFrame name="CFrame">
						<X>-12.5</X>
						<Y>7.4000001</Y>
						<Z>45.5</Z>
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
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Decal" referent="RBX149">
					<Properties>
						<token name="Face">5</token>
						<string name="Name">Decal</string>
						<float name="Shiny">20</float>
						<float name="Specular">0</float>
						<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=22644329</url></Content>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX150">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Local Gui</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true

function onButton1Down(mouse)
	if not enabled  then
		return
	end

	enabled = false
	Tool.GripForward = Vector3.new(-0,-0,1)
	Tool.GripPos = Vector3.new(-1.5, -0.7, -0.3)
	Tool.GripRight = Vector3.new(-1, 0, 0)
	Tool.GripUp = Vector3.new(0, 1, 0)
	wait(1)
	Tool.GripForward = Vector3.new(-0,-0,1)
	Tool.GripPos = Vector3.new(-1.5, -0.7, 0.2)
	Tool.GripRight = Vector3.new(-1, 0, 0)
	Tool.GripUp = Vector3.new(0, 1, 0)
	wait(1)
	Tool.GripForward = Vector3.new(-0,-0,1)
	Tool.GripPos = Vector3.new(-1.5, -0.7, 0.6)
	Tool.GripRight = Vector3.new(-1, 0, 0)
	Tool.GripUp = Vector3.new(0, 1, 0)
	wait(1)
	Tool.Parent.Humanoid.Health = Tool.Parent.Humanoid.Health - 0
	script.Parent:remove()

end

function onEquippedLocal(mouse)

	if mouse == nil then
		print(&quot;Mouse not found&quot;)
		return 
	end

	mouse.Icon = &quot;rbxasset://textures\\ArrowCursor.png&quot;
	mouse.Button1Down:connect(function() onButton1Down(mouse) end)
end


Tool.Equipped:connect(onEquippedLocal)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX151">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">Coke</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX152">
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
						<X>-12.5</X>
						<Y>5.78986931</Y>
						<Z>44.5</Z>
						<R00>1.43038168e-021</R00>
						<R01>4.78551314e-017</R01>
						<R02>-1</R02>
						<R10>-4.78414168e-017</R10>
						<R11>1</R11>
						<R12>4.78551314e-017</R12>
						<R20>1</R20>
						<R21>4.78414168e-017</R21>
						<R22>1.43038168e-021</R22>
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
						<X>4.55424933e-017</X>
						<Y>6.4774155e-021</Y>
						<Z>4.55424933e-017</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-2.71795419e-017</X>
						<Y>0.0074630985</Y>
						<Z>2.72948509e-017</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX153">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=10470609</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>1.20000005</X>
							<Y>1.20000005</Y>
							<Z>1.20000005</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=41631664</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX154">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX155">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX156">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX157">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">Pepsi</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX158">
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
						<X>-12.4994049</X>
						<Y>7.3900919</Y>
						<Z>44.4999695</Z>
						<R00>-3.09197567e-005</R00>
						<R01>1.47866433e-006</R01>
						<R02>-1</R02>
						<R10>4.24311338e-007</R10>
						<R11>1</R11>
						<R12>1.47865114e-006</R12>
						<R20>1</R20>
						<R21>-4.24265636e-007</R21>
						<R22>-3.09197567e-005</R22>
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
						<X>0.00664728926</X>
						<Y>3.29477621e-006</Y>
						<Z>-0.00575074553</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-0.000558839121</X>
						<Y>-0.00376737071</Y>
						<Z>-0.00133785687</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX159">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=10470609</url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>1.20000005</X>
							<Y>1.20000005</Y>
							<Z>1.20000005</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=38857026</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX160">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX161">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX162">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX163">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>5.70000029</Y>
					<Z>42.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">ColaB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX164">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX165">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=12804183</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX166">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Coke
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX167">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>4.70000029</Y>
					<Z>43.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">LaysB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX168">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX169">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=7997610</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX170">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Doritos
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX171">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>4.70000029</Y>
					<Z>42.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">WAFFLEB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX172">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX173">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=22495881</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX174">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Waffle
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX175">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>8.69999981</Y>
					<Z>43.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">CookiesB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="Decal" referent="RBX176">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=7511720</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="ClickDetector" referent="RBX177">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX178">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Cookie
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX179">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>8.69999981</Y>
					<Z>42.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">TwixB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX180">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX181">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=7919845</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX182">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Hersheys
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX183">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1009</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>6.70000029</Y>
					<Z>42.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">EpicSnackB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX184">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX185">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=22644329</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX186">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.EpicSnack
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX187">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>7.70000029</Y>
					<Z>42.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">PepsiB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX188">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX189">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=9862093</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX190">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Pepsi
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX191">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>7.70000029</Y>
					<Z>43.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">MDB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX192">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX193">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=16035971</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX194">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.MountainDew
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX195">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>0.300000012</X>
					<Y>0</Y>
					<Z>0</Z>
					<R00>0.217036337</R00>
					<R01>0</R01>
					<R02>0.976163507</R02>
					<R10>-0</R10>
					<R11>1</R11>
					<R12>-0</R12>
					<R20>-0.976163507</R20>
					<R21>0</R21>
					<R22>0.217036337</R22>
				</CoordinateFrame>
				<string name="Name">Hersheys</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=12510145</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX196">
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
						<X>-12.4997253</X>
						<Y>7.3900919</Y>
						<Z>47.5</Z>
						<R00>-4.69165108e-019</R00>
						<R01>-9.09274149e-008</R01>
						<R02>1</R02>
						<R10>-8.52681281e-016</R10>
						<R11>-1</R11>
						<R12>-9.09274149e-008</R12>
						<R20>1</R20>
						<R21>-8.52681281e-016</R21>
						<R22>4.6908756e-019</R22>
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
						<X>0.00759301987</X>
						<Y>5.21958345e-017</Y>
						<Z>4.55424833e-017</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-1.48751572e-016</X>
						<Y>0.000696036324</Y>
						<Z>0.0014622265</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Sound" referent="RBX197">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=12544690</url></Content>
						<float name="Volume">0.300000012</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX198">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=12517136</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX199">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=38160912 </url></Content>
						<token name="MeshType">5</token>
						<string name="Name">Mesh</string>
						<Vector3 name="Offset">
							<X>0</X>
							<Y>0</Y>
							<Z>0</Z>
						</Vector3>
						<Vector3 name="Scale">
							<X>2</X>
							<Y>3.5</Y>
							<Z>2</Z>
						</Vector3>
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=39399523</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX200">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">SandwichScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true

counter = 5


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	counter = counter - 1
	Tool.GripForward = Vector3.new(-0.976,0,-0.217)
	Tool.GripPos = Vector3.new(.95,-0.76,1.4)
	Tool.GripRight = Vector3.new(0.217,0, 0.976)
	Tool.GripUp = Vector3.new(0,1,0)


	Tool.Handle.DrinkSound:Play()

	wait(.8)
	
	local h = Tool.Parent:FindFirstChild(&quot;Humanoid&quot;)
	if (h ~= nil) then
		if (h.MaxHealth &gt; h.Health + 5) then
			h.Health = h.Health + 5
		else	
			h.Health = h.MaxHealth
		end
	end

	Tool.GripForward = Vector3.new(-0.976,0,-0.217)
	Tool.GripPos = Vector3.new(0.3,0,0)
	Tool.GripRight = Vector3.new(0.217,0,-0.976)
	Tool.GripUp = Vector3.new(0,1,0)
	if counter == 0 then
	Tool:remove()
	end

	enabled = true

end

function onEquipped()
	Tool.Handle.OpenSound:play()
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX201">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>9.69999981</Y>
					<Z>42.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">MilkB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX202">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX203">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=3792032</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX204">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.Milk
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX205">
			<Properties>
				<bool name="Anchored">true</bool>
				<float name="BackParamA">-0.5</float>
				<float name="BackParamB">0.5</float>
				<token name="BackSurface">2</token>
				<token name="BackSurfaceInput">0</token>
				<float name="BottomParamA">-0.5</float>
				<float name="BottomParamB">0.5</float>
				<token name="BottomSurface">2</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1</int>
				<CoordinateFrame name="CFrame">
					<X>-9.80000019</X>
					<Y>9.69999981</Y>
					<Z>43.5</Z>
					<R00>0</R00>
					<R01>1</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>0</R11>
					<R12>1</R12>
					<R20>1</R20>
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
				<token name="FrontSurface">2</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">2</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">256</token>
				<string name="Name">OrangeJuiceB</string>
				<float name="Reflectance">0</float>
				<float name="RightParamA">-0.5</float>
				<float name="RightParamB">0.5</float>
				<token name="RightSurface">2</token>
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
			<Item class="ClickDetector" referent="RBX206">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX207">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset?id=10025912</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX208">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">local drink = script.Parent.Parent.OrangeJuice
local spot = script.Parent.Parent.Holder
local db = false

function onClick()
	if db == false then
		db = true
		local d = drink:clone()
		d.Handle.Position = spot.Position
		d.Parent = game.Workspace
		d.Handle.Anchored = false
		wait(5)
		db = false
	end
end

script.Parent.ClickDetector.MouseClick:connect(onClick)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX209">
			<Properties>
				<bool name="Enabled">true</bool>
				<CoordinateFrame name="Grip">
					<X>-0.150000006</X>
					<Y>0</Y>
					<Z>-0.300000012</Z>
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
				<string name="Name">OrangeJuice</string>
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX210">
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
						<X>-12.5</X>
						<Y>4.18986988</Y>
						<Z>46.5</Z>
						<R00>-7.88449587e-022</R00>
						<R01>3.45244197e-016</R01>
						<R02>1</R02>
						<R10>3.4522768e-016</R10>
						<R11>1</R11>
						<R12>-3.45244197e-016</R12>
						<R20>-1</R20>
						<R21>3.4522768e-016</R21>
						<R22>-7.88449587e-022</R22>
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
						<X>4.55424933e-017</X>
						<Y>6.46455381e-021</Y>
						<Z>4.55424933e-017</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-2.71795353e-017</X>
						<Y>0.0111841941</Y>
						<Z>2.72948856e-017</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Sound" referent="RBX211">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX212">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset?id=</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX213">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset?id=17230208</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset?id=18463869</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX214">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">BloxyColaScript</string>
					<ProtectedString name="Source">local Tool = script.Parent;

enabled = true


function onActivated()
	if not enabled  then
		return
	end

	enabled = false
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.8,0.5,-0.1) * CFrame.Angles(0.4,2.4,0)

	Tool.Handle.DrinkSound:Play()

	for i = 1,30 do
	wait(0.1)
	Player.Humanoid.Health = Player.Humanoid.Health + 1
	end
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(0.9,0.5,-0.05) * CFrame.Angles(0.2,2,0)
	wait(0.05)
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
	wait(0.5)
	enabled = true
end

function onEquipped()
	Player = script.Parent.Parent
	Tool.Handle.OpenSound:play()
end

function onEnequipped()
	Player.Torso[&quot;Right Shoulder&quot;].C0 = CFrame.new(1,0.5,-0) * CFrame.Angles(0,1.57,0)
end

script.Parent.Activated:connect(onActivated)
script.Parent.Equipped:connect(onEquipped)
script.Parent.Unequipped:connect(onEnequipped)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


