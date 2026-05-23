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
					<X>-0.916851044</X>
					<Y>2.40000296</Y>
					<Z>-2.19537735</Z>
					<R00>-1</R00>
					<R01>0</R01>
					<R02>0</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
					<R20>0</R20>
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
				<token name="Material">272</token>
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
					<X>1.08314896</X>
					<Y>3.20000315</Y>
					<Z>-2.69537926</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
					<X>-0.916851044</X>
					<Y>1.60000408</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
					<X>-1.41685104</X>
					<Y>4.00000286</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
					<X>1.08314896</X>
					<Y>3.00000334</Y>
					<Z>-1.19537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
					<X>-0.916851044</X>
					<Y>10.7999907</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
			<Item class="Weld" referent="RBX8">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-2.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>3.5</X>
						<Y>-0.200012207</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>-0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX7</Ref>
					<Ref name="Part1">RBX9</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX10">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-2.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>2.5</X>
						<Y>-0.200012207</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>-0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX7</Ref>
					<Ref name="Part1">RBX11</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX12">
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
					<X>1.08314896</X>
					<Y>4.00000286</Y>
					<Z>0.30462265</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
		<Item class="Part" referent="RBX13">
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
					<X>1.08314896</X>
					<Y>6.00000143</Y>
					<Z>-3.19537926</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
			<Item class="Weld" referent="RBX14">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-0.200012207</Y>
						<Z>-1.30000019</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>-0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX13</Ref>
					<Ref name="Part1">RBX15</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX16">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-0.200012207</Y>
						<Z>-0.300000191</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>-0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX13</Ref>
					<Ref name="Part1">RBX17</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX17">
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
					<X>1.78315926</X>
					<Y>6.29999971</Y>
					<Z>-3.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX18">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX19">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=34402643</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX20">
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
			<Item class="Weld" referent="RBX21">
				<Properties>
					<CoordinateFrame name="C0">
						<X>-0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX17</Ref>
					<Ref name="Part1">RBX22</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX23">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX17</Ref>
					<Ref name="Part1">RBX15</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX24">
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
					<X>1.08314896</X>
					<Y>7.40000153</Y>
					<Z>-0.19537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
		<Item class="Part" referent="RBX25">
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
					<X>-1.41685104</X>
					<Y>5.60000038</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
		<Item class="Part" referent="RBX26">
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
					<X>-1.41685104</X>
					<Y>7.20000267</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>1.08314896</X>
					<Y>6.40000153</Y>
					<Z>-4.19537926</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
			<Item class="Weld" referent="RBX28">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-0.200012207</Y>
						<Z>-1.90000057</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>-0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX27</Ref>
					<Ref name="Part1">RBX29</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX30">
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
					<X>-0.416851044</X>
					<Y>2.40000296</Y>
					<Z>1.80462265</Z>
					<R00>1</R00>
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
				<token name="Material">272</token>
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
			<Item class="Script" referent="RBX31">
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
		<Item class="Part" referent="RBX32">
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
					<X>-2.91685104</X>
					<Y>6.40000153</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
		<Item class="Part" referent="RBX33">
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
					<X>-1.41685104</X>
					<Y>6.40000153</Y>
					<Z>-4.19537926</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
					<X>1</X>
					<Y>8.40000057</Y>
					<Z>4</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX34">
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
					<X>-1.41685104</X>
					<Y>8.79999828</Y>
					<Z>-0.69537735</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
		<Item class="Part" referent="RBX35">
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
					<X>-0.916851044</X>
					<Y>6.40000153</Y>
					<Z>2.80462265</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
		<Item class="Part" referent="RBX36">
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
					<X>1.08314896</X>
					<Y>9.1999979</Y>
					<Z>-3.19537926</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
				<string name="Name">Doritos</string>
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
					<int name="BrickColor">226</int>
					<CoordinateFrame name="CFrame">
						<X>-1.91685104</X>
						<Y>9.59999371</Y>
						<Z>1.80462265</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
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
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">-0.5</float>
					<float name="LeftParamB">0.5</float>
					<token name="LeftSurface">0</token>
					<token name="LeftSurfaceInput">0</token>
					<bool name="Locked">false</bool>
					<token name="Material">272</token>
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
				<Item class="Decal" referent="RBX39">
					<Properties>
						<token name="Face">5</token>
						<string name="Name">Decal</string>
						<float name="Shiny">20</float>
						<float name="Specular">0</float>
						<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=7997660</url></Content>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX40">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=15047813</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX41">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=16213987</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX42">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=19106014</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=37305301</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX43">
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
		<Item class="Tool" referent="RBX44">
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
			<Item class="Part" referent="RBX45">
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
						<X>-1.91685104</X>
						<Y>9.59999371</Y>
						<Z>-0.19537735</Z>
						<R00>1</R00>
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
					<token name="Material">272</token>
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
				<Item class="SpecialMesh" referent="RBX46">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=20939848</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=20939838</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX47">
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
		<Item class="Part" referent="RBX48">
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
					<X>-0.416851044</X>
					<Y>2.40000296</Y>
					<Z>0.30462265</Z>
					<R00>0</R00>
					<R01>0</R01>
					<R02>-1</R02>
					<R10>0</R10>
					<R11>1</R11>
					<R12>0</R12>
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
				<token name="FrontSurface">0</token>
				<token name="FrontSurfaceInput">0</token>
				<float name="LeftParamA">-0.5</float>
				<float name="LeftParamB">0.5</float>
				<token name="LeftSurface">0</token>
				<token name="LeftSurfaceInput">0</token>
				<bool name="Locked">false</bool>
				<token name="Material">272</token>
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
			<Item class="Script" referent="RBX49">
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
			<Item class="Weld" referent="RBX50">
				<Properties>
					<CoordinateFrame name="C0">
						<X>1</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX48</Ref>
					<Ref name="Part1">RBX30</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX51">
				<Properties>
					<CoordinateFrame name="C0">
						<X>-1</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>-0.5</X>
						<Y>0</Y>
						<Z>-1.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX48</Ref>
					<Ref name="Part1">RBX1</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX52">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=21616307</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX53">
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
						<X>-2.01695061</X>
						<Y>9.49002171</Y>
						<Z>-2.19537735</Z>
						<R00>-1.25169754e-006</R00>
						<R01>-0.99999994</R01>
						<R02>-1.43051147e-006</R02>
						<R10>0.99999994</R10>
						<R11>-1.1920929e-006</R11>
						<R12>2.32458115e-006</R12>
						<R20>-2.38418579e-006</R20>
						<R21>-1.37090683e-006</R21>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.00434096763</X>
						<Y>-8.51388359e-006</Y>
						<Z>0.00372328237</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.000174520203</X>
						<Y>-0.00630564988</Y>
						<Z>0.000845831295</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>0.800000012</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="StringValue" referent="RBX54">
					<Properties>
						<string name="Name">Type</string>
						<string name="Value">Cookie</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Weld" referent="RBX55">
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
				<Item class="Weld" referent="RBX56">
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
				<Item class="Weld" referent="RBX57">
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
				<Item class="Weld" referent="RBX58">
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
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
							<R12>0.000817726948</R12>
							<R20>1</R20>
							<R21>-8.15380652e-010</R21>
							<R22>-6.19810758e-010</R22>
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-1.12273511e-007</X>
							<Y>2.60849974e-005</Y>
							<Z>-0.533189535</Z>
							<R00>1</R00>
							<R01>-8.33252689e-010</R01>
							<R02>-3.96865235e-010</R02>
							<R10>8.3357371e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000809622463</R12>
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
				<Item class="Weld" referent="RBX62">
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
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
							<R12>0.000817726948</R12>
							<R20>1</R20>
							<R21>-8.55560567e-010</R21>
							<R22>-6.21001806e-010</R22>
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
							<X>5.25072437e-006</X>
							<Y>-9.04979558e-008</Y>
							<Z>-6.02840373e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.000803425093</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-5.43287024e-006</X>
							<Y>0.132771105</Y>
							<Z>0.400390655</Z>
							<R00>8.48401349e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000801041257</R02>
							<R10>-6.20273943e-010</R10>
							<R11>0.000801041257</R11>
							<R12>-0.999999702</R12>
							<R20>-1</R20>
							<R21>8.47904247e-010</R21>
							<R22>6.20953344e-010</R22>
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
							<X>5.25072437e-006</X>
							<Y>-9.04979558e-008</Y>
							<Z>-6.02840373e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.000803425093</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-2.92850495e-006</X>
							<Y>-0.400390595</Y>
							<Z>-0.132823572</Z>
							<R00>8.56068161e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000817726948</R02>
							<R10>-1</R10>
							<R11>8.55560678e-010</R11>
							<R12>6.21001806e-010</R12>
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
				<Item class="Weld" referent="RBX65">
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>1.20404536e-007</X>
							<Y>1.7940567e-005</Y>
							<Z>0.132805407</Z>
							<R00>-1</R00>
							<R01>8.50133963e-010</R01>
							<R02>4.23458879e-010</R02>
							<R10>8.50476911e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000810576021</R12>
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
				<Item class="Weld" referent="RBX66">
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>5.96581813e-005</X>
							<Y>-0.400390744</Y>
							<Z>0.9335953</Z>
							<R00>8.14806722e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000811847276</R02>
							<R10>1</R10>
							<R11>-8.1443452e-010</R11>
							<R12>-4.58876631e-010</R12>
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
				<Item class="Weld" referent="RBX67">
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>2.33017072e-005</X>
							<Y>-0.933604836</Y>
							<Z>0.400390595</Z>
							<R00>8.35977676e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000817726948</R02>
							<R10>6.19722884e-010</R10>
							<R11>-0.000817726948</R11>
							<R12>0.999999702</R12>
							<R20>1</R20>
							<R21>-8.35470693e-010</R21>
							<R22>-6.20406282e-010</R22>
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
							<X>5.25072437e-006</X>
							<Y>-9.04979558e-008</Y>
							<Z>-6.02840373e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.000803425093</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-1.52226988e-007</X>
							<Y>-0.373301029</Y>
							<Z>-0.533214867</Z>
							<R00>1</R00>
							<R01>-9.17886822e-010</R01>
							<R02>-2.52556698e-010</R02>
							<R10>9.18089604e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000804378418</R12>
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
				<Item class="Weld" referent="RBX69">
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
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
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
							<R12>0.000817726948</R12>
							<R20>-1</R20>
							<R21>8.15380652e-010</R21>
							<R22>6.19810758e-010</R22>
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
							<X>5.25072437e-006</X>
							<Y>-9.04979558e-008</Y>
							<Z>-6.02840373e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.000803425093</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000803425093</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918752e-010</R22>
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
							<X>0.533207953</X>
							<Y>4.02465412e-005</Y>
							<Z>-0.399536252</Z>
							<R00>-4.0660561e-010</R00>
							<R01>0.997999609</R01>
							<R02>0.0632200539</R02>
							<R10>3.50466517e-010</R10>
							<R11>-0.0632200539</R11>
							<R12>0.997999668</R12>
							<R20>1</R20>
							<R21>4.2794876e-010</R21>
							<R22>-3.24059835e-010</R22>
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
							<X>-3.86806875e-007</X>
							<Y>4.67300815e-005</Y>
							<Z>-0.533184648</Z>
							<R00>1</R00>
							<R01>6.89605151e-010</R01>
							<R02>-1.25792432e-009</R02>
							<R10>1.29899103e-009</R10>
							<R11>-0.0631973371</R11>
							<R12>0.998001039</R12>
							<R20>6.08729123e-010</R20>
							<R21>-0.998001099</R21>
							<R22>-0.0631973371</R22>
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
							<R01>0.998000622</R01>
							<R02>0.0632058904</R02>
							<R10>1.32148736e-009</R10>
							<R11>-0.0632058978</R11>
							<R12>0.998000503</R12>
							<R20>1</R20>
							<R21>9.1469754e-010</R21>
							<R22>-1.26620492e-009</R22>
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
							<R01>-0.0632034019</R01>
							<R02>0.998000741</R02>
							<R10>-4.07727963e-010</R10>
							<R11>0.998000681</R11>
							<R12>0.0632034019</R12>
							<R20>-1</R20>
							<R21>-4.31118696e-010</R21>
							<R22>3.56448732e-010</R22>
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
							<R01>-0.0632200539</R01>
							<R02>0.997999668</R02>
							<R10>-1</R10>
							<R11>-4.31644803e-010</R11>
							<R12>3.64087233e-010</R12>
							<R20>4.07763739e-010</R20>
							<R21>-0.997999609</R21>
							<R22>-0.0632200539</R22>
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
							<R01>-2.34147424e-010</R01>
							<R02>3.70999564e-010</R02>
							<R10>3.85058263e-010</R10>
							<R11>-0.0632105544</R11>
							<R12>0.998000205</R12>
							<R20>-2.10228071e-010</R20>
							<R21>0.998000264</R21>
							<R22>0.0632105544</R22>
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
							<R01>-0.0632092953</R01>
							<R02>0.998000324</R02>
							<R10>1</R10>
							<R11>2.67267597e-010</R11>
							<R12>-3.33160693e-010</R12>
							<R20>-2.45674314e-010</R20>
							<R21>0.998000324</R21>
							<R22>0.0632092878</R22>
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
							<R01>-0.0632200539</R01>
							<R02>0.997999668</R02>
							<R10>4.07184675e-010</R10>
							<R11>-0.997999609</R11>
							<R12>-0.0632200539</R12>
							<R20>1</R20>
							<R21>4.29796781e-010</R21>
							<R22>-3.44073547e-010</R22>
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
							<R01>6.78072321e-011</R01>
							<R02>-4.49284138e-010</R02>
							<R10>4.52671733e-010</R10>
							<R11>-0.0632067397</R11>
							<R12>0.998000443</R12>
							<R20>3.92738446e-011</R20>
							<R21>-0.998000562</R21>
							<R22>-0.0632067248</R22>
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
							<R01>-0.997999609</R01>
							<R02>-0.0632200539</R02>
							<R10>3.50466517e-010</R10>
							<R11>-0.0632200539</R11>
							<R12>0.997999668</R12>
							<R20>-1</R20>
							<R21>-4.2794876e-010</R21>
							<R22>3.24059835e-010</R22>
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
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
							<R12>0.000812952989</R12>
							<R20>1</R20>
							<R21>-5.05218589e-010</R21>
							<R22>-4.77862916e-010</R22>
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-2.3357552e-007</X>
							<Y>5.55160077e-005</Y>
							<Z>-0.533165157</Z>
							<R00>1</R00>
							<R01>-1.76372972e-009</R01>
							<R02>-8.22718005e-010</R02>
							<R10>1.76440684e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000823921058</R12>
							<R20>8.21264445e-010</R20>
							<R21>-0.000823920942</R21>
							<R22>0.999999762</R22>
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
							<X>5.53692553e-006</X>
							<Y>2.04514564e-007</Y>
							<Z>-6.04753154e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.00080342195</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>0.533225417</X>
							<Y>0.37339133</Y>
							<Z>-1.62893741e-007</Z>
							<R00>-1.04536846e-009</R00>
							<R01>0.000832025486</R01>
							<R02>-0.999999642</R02>
							<R10>1.78690496e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000832025427</R12>
							<R20>1</R20>
							<R21>-1.78603476e-009</R21>
							<R22>-1.04685483e-009</R22>
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
							<X>5.53692553e-006</X>
							<Y>2.04514564e-007</Y>
							<Z>-6.04753154e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.00080342195</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-4.40306758e-006</X>
							<Y>0.132771388</Y>
							<Z>0.400390655</Z>
							<R00>8.48401349e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000801038579</R02>
							<R10>-6.20273943e-010</R10>
							<R11>0.000801038579</R11>
							<R12>-0.999999702</R12>
							<R20>-1</R20>
							<R21>8.47904247e-010</R21>
							<R22>6.20953344e-010</R22>
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
							<X>5.53692553e-006</X>
							<Y>2.04514564e-007</Y>
							<Z>-6.04753154e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.00080342195</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>1.28626851e-007</X>
							<Y>-0.400390595</Y>
							<Z>-0.13282387</Z>
							<R00>8.56068161e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000817724678</R02>
							<R10>-1</R10>
							<R11>8.55560678e-010</R11>
							<R12>6.21001806e-010</R12>
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
				<Item class="Weld" referent="RBX89">
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>1.20785018e-007</X>
							<Y>3.03727884e-005</Y>
							<Z>0.132775158</Z>
							<R00>-1</R00>
							<R01>8.50133963e-010</R01>
							<R02>4.23458851e-010</R02>
							<R10>8.50476911e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000810569618</R12>
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
				<Item class="Weld" referent="RBX90">
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>6.63429382e-005</X>
							<Y>-0.400390744</Y>
							<Z>0.933595598</Z>
							<R00>8.14806722e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000811841746</R02>
							<R10>1</R10>
							<R11>-8.14434464e-010</R11>
							<R12>-4.58876631e-010</R12>
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
				<Item class="Weld" referent="RBX91">
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>2.15904674e-005</X>
							<Y>-0.933605134</Y>
							<Z>0.400390595</Z>
							<R00>8.35977676e-010</R00>
							<R01>0.999999702</R01>
							<R02>0.000817724678</R02>
							<R10>6.19722884e-010</R10>
							<R11>-0.000817724678</R11>
							<R12>0.999999702</R12>
							<R20>1</R20>
							<R21>-8.35470693e-010</R21>
							<R22>-6.20406337e-010</R22>
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
							<X>5.53692553e-006</X>
							<Y>2.04514564e-007</Y>
							<Z>-6.04753154e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.00080342195</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-1.52702455e-007</X>
							<Y>-0.373297483</Y>
							<Z>-0.533215165</Z>
							<R00>1</R00>
							<R01>-9.17886822e-010</R01>
							<R02>-2.52556753e-010</R02>
							<R10>9.18089604e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000804377254</R12>
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
				<Item class="Weld" referent="RBX93">
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
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
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
							<R12>0.000817724678</R12>
							<R20>-1</R20>
							<R21>8.15380652e-010</R21>
							<R22>6.19810814e-010</R22>
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
							<X>5.53692553e-006</X>
							<Y>2.04514564e-007</Y>
							<Z>-6.04753154e-008</Z>
							<R00>-2.12544884e-010</R00>
							<R01>0.00080342195</R01>
							<R02>-0.999999702</R02>
							<R10>4.65420175e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.00080342195</R12>
							<R20>1</R20>
							<R21>-4.65249311e-010</R21>
							<R22>-2.12918766e-010</R22>
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
							<X>-4.09776021e-007</X>
							<Y>5.64174661e-005</Y>
							<Z>-0.533183694</Z>
							<R00>1</R00>
							<R01>5.16648224e-010</R01>
							<R02>-1.33828371e-009</R02>
							<R10>1.29899103e-009</R10>
							<R11>0.0697453171</R11>
							<R12>0.997564912</R12>
							<R20>6.08729123e-010</R20>
							<R21>-0.997564912</R21>
							<R22>0.0697453246</R22>
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
							<R01>0.997565448</R01>
							<R02>-0.0697367489</R02>
							<R10>1.32148736e-009</R10>
							<R11>0.0697367489</R11>
							<R12>0.997565448</R12>
							<R20>1</R20>
							<R21>7.38653139e-010</R21>
							<R22>-1.37634937e-009</R22>
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
							<R01>0.0697392747</R01>
							<R02>0.997565329</R02>
							<R10>-4.07727963e-010</R10>
							<R11>0.997565329</R11>
							<R12>-0.0697392747</R12>
							<R20>-1</R20>
							<R21>-3.80026233e-010</R21>
							<R22>4.10486423e-010</R22>
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
							<R01>0.0697226226</R01>
							<R02>0.997566521</R02>
							<R10>-1</R10>
							<R11>-3.79534459e-010</R11>
							<R12>4.18127227e-010</R12>
							<R20>4.07763739e-010</R20>
							<R21>-0.997566402</R21>
							<R22>0.0697226301</R22>
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
							<R01>-1.82865389e-010</R01>
							<R02>3.9878062e-010</R02>
							<R10>3.85058263e-010</R10>
							<R11>0.0697321221</R11>
							<R12>0.997565806</R12>
							<R20>-2.10228071e-010</R20>
							<R21>0.997565746</R21>
							<R22>-0.0697321221</R22>
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
							<R01>0.0697333813</R01>
							<R02>0.997565746</R02>
							<R10>1</R10>
							<R11>2.20712254e-010</R11>
							<R12>-3.65669495e-010</R12>
							<R20>-2.45674314e-010</R20>
							<R21>0.997565746</R21>
							<R22>-0.0697333887</R22>
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
							<R01>0.0697226226</R01>
							<R02>0.997566521</R02>
							<R10>4.07184675e-010</R10>
							<R11>-0.997566402</R11>
							<R12>0.0697226301</R12>
							<R20>1</R20>
							<R21>3.80357551e-010</R21>
							<R22>-3.98045263e-010</R22>
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
							<R01>7.61074016e-012</R01>
							<R02>-4.54308563e-010</R02>
							<R10>4.52671733e-010</R10>
							<R11>0.0697359443</R11>
							<R12>0.997565567</R12>
							<R20>3.92738446e-011</R20>
							<R21>-0.997565567</R21>
							<R22>0.0697359443</R22>
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
							<R01>-0.997566402</R01>
							<R02>0.0697226301</R02>
							<R10>3.50466517e-010</R10>
							<R11>0.0697226226</R11>
							<R12>0.997566521</R12>
							<R20>-1</R20>
							<R21>-3.8118067e-010</R21>
							<R22>3.77963272e-010</R22>
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
				<Item class="Weld" referent="RBX107">
					<Properties>
						<CoordinateFrame name="C0">
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
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
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>0.5332008</X>
							<Y>8.52442608e-005</Y>
							<Z>-0.399536431</Z>
							<R00>-1.4692636e-009</R00>
							<R01>0.000846330251</R01>
							<R02>-0.999999642</R02>
							<R10>2.67755484e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000846330193</R12>
							<R20>1</R20>
							<R21>-2.67631073e-009</R21>
							<R22>-1.47152912e-009</R22>
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
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-3.54604822e-007</X>
							<Y>7.10747918e-005</Y>
							<Z>-0.533170998</Z>
							<R00>1</R00>
							<R01>-2.69418865e-009</R01>
							<R02>-1.24858379e-009</R02>
							<R10>2.69523404e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000838225707</R12>
							<R20>1.24632515e-009</R20>
							<R21>-0.000838225707</R21>
							<R22>0.999999642</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>0.533231318</X>
							<Y>0.373406291</Y>
							<Z>-2.83906502e-007</Z>
							<R00>-1.47042167e-009</R00>
							<R01>0.000846330251</R01>
							<R02>-0.999999642</R02>
							<R10>2.71773581e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000846330193</R12>
							<R20>1</R20>
							<R21>-2.71649037e-009</R21>
							<R22>-1.47272128e-009</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>5.93345294e-006</X>
							<Y>0.132752568</Y>
							<Z>0.400390923</Z>
							<R00>2.71005463e-009</R00>
							<R01>0.999999702</R01>
							<R02>0.000829644501</R02>
							<R10>-1.47042467e-009</R10>
							<R11>0.000829644501</R11>
							<R12>-0.999999642</R12>
							<R20>-1</R20>
							<R21>2.70883382e-009</R21>
							<R22>1.47267265e-009</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>8.4651374e-006</X>
							<Y>-0.400390327</Y>
							<Z>-0.132810175</Z>
							<R00>2.71773581e-009</R00>
							<R01>0.999999702</R01>
							<R02>0.000846330193</R02>
							<R10>-1</R10>
							<R11>2.71649037e-009</R11>
							<R12>1.47272128e-009</R12>
							<R20>1.47042167e-009</R20>
							<R21>-0.000846330251</R21>
							<R22>0.999999642</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>3.62762336e-007</X>
							<Y>2.95230384e-005</Y>
							<Z>0.132817402</Z>
							<R00>-1</R00>
							<R01>2.71106715e-009</R01>
							<R02>1.27517807e-009</R02>
							<R10>2.71213629e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000839179265</R12>
							<R20>-1.27290256e-009</R20>
							<R21>0.000839179265</R21>
							<R22>-0.999999642</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>0.000142092002</X>
							<Y>-0.400391012</Y>
							<Z>0.93360728</Z>
							<R00>2.67646505e-009</R00>
							<R01>0.999999702</R01>
							<R02>0.000840450521</R02>
							<R10>1</R10>
							<R11>-2.6753646e-009</R11>
							<R12>-1.31059485e-009</R12>
							<R20>-1.30834588e-009</R20>
							<R21>0.000840450521</R21>
							<R22>-0.999999642</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>0.000101452555</X>
							<Y>-0.933591425</Y>
							<Z>0.400390327</Z>
							<R00>2.69764522e-009</R00>
							<R01>0.999999702</R01>
							<R02>0.000846330193</R02>
							<R10>1.46984258e-009</R10>
							<R11>-0.000846330251</R11>
							<R12>0.999999642</R12>
							<R20>1</R20>
							<R21>-2.69640044e-009</R21>
							<R22>-1.47212509e-009</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-3.94687646e-007</X>
							<Y>-0.373256177</Y>
							<Z>-0.533165812</Z>
							<R00>1</R00>
							<R01>-2.77882695e-009</R01>
							<R02>-1.10427789e-009</R02>
							<R10>2.77974577e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000832981663</R12>
							<R20>1.10196274e-009</R20>
							<R21>-0.000832981663</R21>
							<R22>0.999999642</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-0.5332008</X>
							<Y>8.52442608e-005</Y>
							<Z>-0.400390327</Z>
							<R00>1.4692636e-009</R00>
							<R01>-0.000846330251</R01>
							<R02>0.999999642</R02>
							<R10>2.67755484e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000846330193</R12>
							<R20>-1</R20>
							<R21>2.67631073e-009</R21>
							<R22>1.47152912e-009</R22>
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
							<X>1.14122267e-005</X>
							<Y>2.31042439e-008</Y>
							<Z>-1.81467669e-007</Z>
							<R00>-6.37624675e-010</R00>
							<R01>0.000817726715</R01>
							<R02>-0.999999762</R02>
							<R10>1.396256e-009</R10>
							<R11>0.999999702</R11>
							<R12>0.000817726832</R12>
							<R20>1</R20>
							<R21>-1.39573431e-009</R21>
							<R22>-6.38766207e-010</R22>
						</CoordinateFrame>
						<CoordinateFrame name="C1">
							<X>-2.17958132e-008</X>
							<Y>2.16124681e-005</Y>
							<Z>-0.933588922</Z>
							<R00>1</R00>
							<R01>-7.00479896e-010</R01>
							<R02>-5.50027579e-010</R02>
							<R10>7.00928149e-010</R10>
							<R11>0.999999702</R11>
							<R12>0.000815343345</R12>
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
				<Item class="Weld" referent="RBX119">
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
				<Item class="Weld" referent="RBX120">
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
				<Item class="Weld" referent="RBX121">
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
				<Item class="Weld" referent="RBX122">
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
				<Item class="Weld" referent="RBX123">
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
				<Item class="Weld" referent="RBX124">
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
				<Item class="Weld" referent="RBX125">
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
				<Item class="Weld" referent="RBX126">
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
				<Item class="Weld" referent="RBX127">
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
				<Item class="Sound" referent="RBX128">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">EatSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=15047813</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX129">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=20939848</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=21456464</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="NumberValue" referent="RBX130">
				<Properties>
					<string name="Name">Bites</string>
					<double name="Value">5</double>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="StringValue" referent="RBX131">
				<Properties>
					<string name="Name">Info</string>
					<string name="Value">Cookie</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX132">
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
			<Item class="Script" referent="RBX133">
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
		<Item class="Tool" referent="RBX134">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX135">
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
						<X>-0.916851044</X>
						<Y>6.38993168</Y>
						<Z>-0.19537735</Z>
						<R00>-0.999999881</R00>
						<R01>8.63809305e-007</R01>
						<R02>2.70009041e-005</R02>
						<R10>8.6371108e-007</R10>
						<R11>1</R11>
						<R12>-3.66249242e-006</R12>
						<R20>-2.70009041e-005</R20>
						<R21>-3.66246923e-006</R21>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.00155954703</X>
						<Y>-6.44706404e-008</Y>
						<Z>-0.00156002492</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.00186171732</X>
						<Y>-0.00790779013</Y>
						<Z>-0.00127562764</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX136">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=10470609</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=38857290</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX137">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX138">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX139">
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
		<Item class="Tool" referent="RBX140">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX141">
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
						<X>-0.91660881</X>
						<Y>6.38993454</Y>
						<Z>1.80486488</Z>
						<R00>7.41414333e-005</R00>
						<R01>9.81240078e-007</R01>
						<R02>-1</R02>
						<R10>1.11201075e-006</R10>
						<R11>1</R11>
						<R12>9.81322614e-007</R12>
						<R20>1</R20>
						<R21>-1.11208351e-006</R21>
						<R22>7.41414333e-005</R22>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.000469446939</X>
						<Y>-0.000483007694</Y>
						<Z>-0.00147715618</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.00026011921</X>
						<Y>0.00733526237</Y>
						<Z>0.00372740603</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX142">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=10470609</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=29796694</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX143">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX144">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX145">
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
		<Item class="Tool" referent="RBX146">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX147">
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
						<X>-0.916851044</X>
						<Y>4.79008055</Y>
						<Z>1.80486488</Z>
						<R00>-3.0147803e-005</R00>
						<R01>5.71552221e-007</R01>
						<R02>-1</R02>
						<R10>1.2934554e-006</R10>
						<R11>1</R11>
						<R12>5.71513226e-007</R12>
						<R20>1</R20>
						<R21>-1.29343812e-006</R21>
						<R22>-3.0147803e-005</R22>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>0.00386561197</X>
						<Y>0.00315116625</Y>
						<Z>-0.00576860271</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.000511640857</X>
						<Y>-0.00332694361</Y>
						<Z>0.00164477248</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX148">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=10470609</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=19444172</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX149">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX150">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX151">
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
		<Item class="Part" referent="RBX15">
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
					<X>1.78315926</X>
					<Y>7.29999971</Y>
					<Z>-3.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX152">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX153">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=27158173</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX154">
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
		<Item class="Tool" referent="RBX155">
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
			<Item class="Part" referent="RBX156">
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
						<X>-0.916851044</X>
						<Y>8.00000095</Y>
						<Z>-1.19537735</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
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
					<token name="FrontSurface">0</token>
					<token name="FrontSurfaceInput">0</token>
					<float name="LeftParamA">-0.5</float>
					<float name="LeftParamB">0.5</float>
					<token name="LeftSurface">0</token>
					<token name="LeftSurfaceInput">0</token>
					<bool name="Locked">false</bool>
					<token name="Material">272</token>
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
				<Item class="Decal" referent="RBX157">
					<Properties>
						<token name="Face">5</token>
						<string name="Name">Decal</string>
						<float name="Shiny">20</float>
						<float name="Specular">0</float>
						<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=22644329</url></Content>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="LocalScript" referent="RBX158">
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
		<Item class="Tool" referent="RBX159">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX160">
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
						<X>-0.916851044</X>
						<Y>6.38993454</Y>
						<Z>-2.19537735</Z>
						<R00>2.73479704e-021</R00>
						<R01>9.64831407e-016</R01>
						<R02>-1</R02>
						<R10>-9.64751786e-016</R10>
						<R11>1</R11>
						<R12>9.64831407e-016</R12>
						<R20>1</R20>
						<R21>9.64751786e-016</R21>
						<R22>2.73479704e-021</R22>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>1.25043861e-016</X>
						<Y>2.67866528e-020</Y>
						<Z>1.25036052e-016</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-7.49775764e-017</X>
						<Y>0.00943453144</Y>
						<Z>7.50676531e-017</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX161">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=10470609</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=41631664</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX162">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX163">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX164">
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
		<Item class="Tool" referent="RBX165">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX166">
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
						<X>-0.91636467</X>
						<Y>7.98993492</Y>
						<Z>-2.19537735</Z>
						<R00>-3.09184834e-005</R00>
						<R01>-2.50413734e-007</R01>
						<R02>-1</R02>
						<R10>-2.01861371e-006</R10>
						<R11>1</R11>
						<R12>-2.5035132e-007</R12>
						<R20>1</R20>
						<R21>2.01860598e-006</R21>
						<R22>-3.09184834e-005</R22>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.0023786081</X>
						<Y>-1.46989178e-005</Y>
						<Z>-0.0016318463</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.000176455913</X>
						<Y>0.00723673031</Y>
						<Z>0.000729909982</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX167">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=10470609</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=38857026</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX168">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX169">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10721950</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX170">
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
		<Item class="Part" referent="RBX22">
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
					<X>1.78315926</X>
					<Y>6.29999971</Y>
					<Z>-4.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX171">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX172">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=12804183</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX173">
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
			<Item class="Weld" referent="RBX174">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-0.0999994278</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX22</Ref>
					<Ref name="Part1">RBX27</Ref>
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
					<X>1.78315926</X>
					<Y>5.29999971</Y>
					<Z>-3.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX176">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX177">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=7997610</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX178">
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
			<Item class="Weld" referent="RBX179">
				<Properties>
					<CoordinateFrame name="C0">
						<X>-0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX175</Ref>
					<Ref name="Part1">RBX180</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX181">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-0.699999809</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX175</Ref>
					<Ref name="Part1">RBX13</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX182">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX175</Ref>
					<Ref name="Part1">RBX17</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX180">
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
					<X>1.78315926</X>
					<Y>5.29999971</Y>
					<Z>-4.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX183">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX184">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=22495881</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX185">
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
			<Item class="Weld" referent="RBX186">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-1.09999943</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX180</Ref>
					<Ref name="Part1">RBX27</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX187">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX180</Ref>
					<Ref name="Part1">RBX22</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX188">
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
					<X>1.78315926</X>
					<Y>9.29999828</Y>
					<Z>-3.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="Decal" referent="RBX189">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=7511720</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="ClickDetector" referent="RBX190">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX191">
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
			<Item class="Weld" referent="RBX192">
				<Properties>
					<CoordinateFrame name="C0">
						<X>-0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX188</Ref>
					<Ref name="Part1">RBX193</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX194">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0.100000381</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX188</Ref>
					<Ref name="Part1">RBX36</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX193">
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
					<X>1.78315926</X>
					<Y>9.29999828</Y>
					<Z>-4.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX195">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX196">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=7919845</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX197">
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
			<Item class="Weld" referent="RBX198">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>2.90000057</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX193</Ref>
					<Ref name="Part1">RBX27</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX199">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX193</Ref>
					<Ref name="Part1">RBX29</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX200">
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
					<X>1.78315926</X>
					<Y>7.29999971</Y>
					<Z>-4.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX201">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX202">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=22644329</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX203">
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
			<Item class="Weld" referent="RBX204">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0.900000572</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX200</Ref>
					<Ref name="Part1">RBX27</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX205">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0.5</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>-0.5</X>
						<Y>0</Y>
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
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX200</Ref>
					<Ref name="Part1">RBX15</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX206">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX200</Ref>
					<Ref name="Part1">RBX29</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX207">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX200</Ref>
					<Ref name="Part1">RBX22</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX29">
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
					<X>1.78315926</X>
					<Y>8.29999828</Y>
					<Z>-4.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX208">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX209">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=9862093</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX210">
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
		<Item class="Part" referent="RBX211">
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
					<X>1.78315926</X>
					<Y>8.29999828</Y>
					<Z>-3.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX212">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX213">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=16035971</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX214">
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
			<Item class="Weld" referent="RBX215">
				<Properties>
					<CoordinateFrame name="C0">
						<X>-0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX211</Ref>
					<Ref name="Part1">RBX29</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX216">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX211</Ref>
					<Ref name="Part1">RBX15</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX217">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>-0.899999619</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX211</Ref>
					<Ref name="Part1">RBX36</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX218">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
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
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX211</Ref>
					<Ref name="Part1">RBX188</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX219">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=12510145</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX220">
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
						<X>-0.91660881</X>
						<Y>7.98993492</Y>
						<Z>0.80462265</Z>
						<R00>1.42065569e-012</R00>
						<R01>1.68604322e-006</R01>
						<R02>1</R02>
						<R10>-2.27748207e-015</R10>
						<R11>-1</R11>
						<R12>1.68604322e-006</R12>
						<R20>1</R20>
						<R21>-2.27987748e-015</R21>
						<R22>-1.42065569e-012</R22>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>-0.00340819219</X>
						<Y>2.80705059e-009</Y>
						<Z>-3.13705865e-017</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-9.13613328e-014</X>
						<Y>-0.0049007237</Y>
						<Z>-0.0017230208</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Sound" referent="RBX221">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=12544690</url></Content>
						<float name="Volume">0.300000012</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX222">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=12517136</url></Content>
						<float name="Volume">1</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX223">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=38160912 </url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=39399523</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX224">
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
		<Item class="Part" referent="RBX9">
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
					<X>1.78315926</X>
					<Y>10.2999907</Y>
					<Z>-4.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX225">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX226">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=3792032</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX227">
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
			<Item class="Weld" referent="RBX228">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>3.90000057</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX9</Ref>
					<Ref name="Part1">RBX27</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX229">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX9</Ref>
					<Ref name="Part1">RBX193</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX11">
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
					<X>1.78315926</X>
					<Y>10.2999907</Y>
					<Z>-3.19537926</Z>
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
				<token name="Material">272</token>
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
			<Item class="ClickDetector" referent="RBX230">
				<Properties>
					<float name="MaxActivationDistance">32</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Decal" referent="RBX231">
				<Properties>
					<token name="Face">1</token>
					<string name="Name">Decal</string>
					<float name="Shiny">20</float>
					<float name="Specular">0</float>
					<Content name="Texture"><url>http://www.emeraldolds.glados.pro/asset/?id=10025912</url></Content>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX232">
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
			<Item class="Weld" referent="RBX233">
				<Properties>
					<CoordinateFrame name="C0">
						<X>-0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0.5</X>
						<Y>0</Y>
						<Z>0</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>-1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>1</R20>
						<R21>0</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX11</Ref>
					<Ref name="Part1">RBX9</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX234">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>-0.200000003</Y>
						<Z>0</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>1.10000038</Y>
						<Z>-0.5</Z>
						<R00>1</R00>
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
					<Ref name="Part0">RBX11</Ref>
					<Ref name="Part1">RBX36</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Weld" referent="RBX235">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>0</Y>
						<Z>-0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<CoordinateFrame name="C1">
						<X>0</X>
						<Y>0</Y>
						<Z>0.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
					</CoordinateFrame>
					<string name="Name">Weld</string>
					<Ref name="Part0">RBX11</Ref>
					<Ref name="Part1">RBX188</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Tool" referent="RBX236">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX237">
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
						<X>-0.916851044</X>
						<Y>4.79007673</Y>
						<Z>-0.19537735</Z>
						<R00>-2.09200459e-021</R00>
						<R01>1.26225877e-015</R01>
						<R02>1</R02>
						<R10>1.26217671e-015</R10>
						<R11>1</R11>
						<R12>-1.26225877e-015</R12>
						<R20>-1</R20>
						<R21>1.26217671e-015</R21>
						<R22>-2.09200459e-021</R22>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>1.25043861e-016</X>
						<Y>2.66404405e-020</Y>
						<Z>1.25036066e-016</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>-7.49774771e-017</X>
						<Y>-0.0096774539</Y>
						<Z>7.506762e-017</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Sound" referent="RBX238">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX239">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX240">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=17230208</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=18463869</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX241">
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
		<Item class="Tool" referent="RBX242">
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
				<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX243">
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
						<X>-0.91636467</X>
						<Y>4.79008055</Y>
						<Z>-2.19513512</Z>
						<R00>-0.999999881</R00>
						<R01>8.93425522e-007</R01>
						<R02>5.60283661e-005</R02>
						<R10>8.93232709e-007</R10>
						<R11>1</R11>
						<R12>-3.44726209e-006</R12>
						<R20>-5.60283661e-005</R20>
						<R21>-3.44721207e-006</R21>
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
					<token name="Material">272</token>
					<string name="Name">Handle</string>
					<float name="Reflectance">0</float>
					<float name="RightParamA">-0.5</float>
					<float name="RightParamB">0.5</float>
					<token name="RightSurface">0</token>
					<token name="RightSurfaceInput">0</token>
					<Vector3 name="RotVelocity">
						<X>0.0056482777</X>
						<Y>2.77850722e-005</Y>
						<Z>-0.00462182844</Z>
					</Vector3>
					<float name="TopParamA">-0.5</float>
					<float name="TopParamB">0.5</float>
					<token name="TopSurface">0</token>
					<token name="TopSurfaceInput">0</token>
					<float name="Transparency">0</float>
					<Vector3 name="Velocity">
						<X>0.000901999301</X>
						<Y>0.00330874976</Y>
						<Z>0.000279641565</Z>
					</Vector3>
					<bool name="archivable">true</bool>
					<token name="shape">1</token>
					<Vector3 name="size">
						<X>1</X>
						<Y>1.20000005</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="Sound" referent="RBX244">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">DrinkSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=10722059</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="Sound" referent="RBX245">
					<Properties>
						<bool name="Looped">false</bool>
						<string name="Name">OpenSound</string>
						<float name="Pitch">1</float>
						<int name="PlayCount">-1</int>
						<bool name="PlayOnRemove">false</bool>
						<Content name="SoundId"><url>http://www.emeraldolds.glados.pro/asset/?id=</url></Content>
						<float name="Volume">0.5</float>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
				<Item class="SpecialMesh" referent="RBX246">
					<Properties>
						<token name="LODX">2</token>
						<token name="LODY">2</token>
						<Content name="MeshId"><url>http://www.emeraldolds.glados.pro/asset/?id=17230208</url></Content>
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
						<Content name="TextureId"><url>http://www.emeraldolds.glados.pro/asset/?id=26024079</url></Content>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</Item>
			<Item class="Script" referent="RBX247">
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


