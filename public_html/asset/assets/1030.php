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
			<string name="Name">Radio</string>
			<Ref name="PrimaryPart">RBX1</Ref>
			<bool name="archivable">true</bool>
		</Properties>
		<Item class="Part" referent="RBX2">
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
				<int name="BrickColor">37</int>
				<CoordinateFrame name="CFrame">
					<X>0.5</X>
					<Y>5.20000029</Y>
					<Z>2</Z>
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
				<string name="Name">play</string>
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
					<X>2</X>
					<Y>0.800000012</Y>
					<Z>3</Z>
				</Vector3>
			</Properties>
			<Item class="ClickDetector" referent="RBX3">
				<Properties>
					<float name="MaxActivationDistance">50</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX4">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">brick=script.Parent
other=brick.Parent.stop
music=brick.Parent.music

function onClicked()

music:Play()

brick.Size=Vector3.new(2, 0.8, 3)
brick.Position=brick.Position-Vector3.new(0, 0.2, 0)

other.Size=Vector3.new(2, 1.2, 3)

end

script.Parent.ClickDetector.MouseClick:connect(onClicked)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Model" referent="RBX5">
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
				<Ref name="PrimaryPart">RBX1</Ref>
				<bool name="archivable">true</bool>
			</Properties>
			<Item class="Part" referent="RBX6">
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
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>-1.5</X>
						<Y>5.4000001</Y>
						<Z>1</Z>
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
					<string name="Name">Brick</string>
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
						<Y>1.20000005</Y>
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
					<token name="BottomSurface">4</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>0</X>
						<Y>5.4000001</Y>
						<Z>4</Z>
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
					<string name="Name">Brick</string>
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
						<X>2</X>
						<Y>1.20000005</Y>
						<Z>4</Z>
					</Vector3>
				</Properties>
			</Item>
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
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>0</X>
						<Y>2.4000001</Y>
						<Z>0</Z>
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
					<string name="Name">Brick</string>
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
						<X>10</X>
						<Y>4.80000019</Y>
						<Z>4</Z>
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
					<token name="BottomSurface">4</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">199</int>
					<CoordinateFrame name="CFrame">
						<X>0</X>
						<Y>5.4000001</Y>
						<Z>-3</Z>
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
					<string name="Name">Brick</string>
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
						<Y>1.20000005</Y>
						<Z>4</Z>
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
					<token name="BottomSurface">2</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">26</int>
					<CoordinateFrame name="CFrame">
						<X>2.20000005</X>
						<Y>2.70000005</Y>
						<Z>-2.5</Z>
						<R00>-0</R00>
						<R01>1</R01>
						<R02>-0</R02>
						<R10>-0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>-1</R20>
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
					<string name="Name">Speaker</string>
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
				<Item class="SpecialMesh" referent="RBX10">
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
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
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
			<Item class="Part" referent="RBX11">
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
					<int name="BrickColor">26</int>
					<CoordinateFrame name="CFrame">
						<X>2.20000005</X>
						<Y>2.5</Y>
						<Z>2.5</Z>
						<R00>-0</R00>
						<R01>1</R01>
						<R02>-0</R02>
						<R10>-0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>-1</R20>
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
					<string name="Name">Speaker</string>
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
				<Item class="SpecialMesh" referent="RBX12">
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
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
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
		<Item class="Part" referent="RBX13">
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
				<int name="BrickColor">21</int>
				<CoordinateFrame name="CFrame">
					<X>0.5</X>
					<Y>5.4000001</Y>
					<Z>0</Z>
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
				<string name="Name">stop</string>
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
					<X>2</X>
					<Y>1.20000005</Y>
					<Z>3</Z>
				</Vector3>
			</Properties>
			<Item class="ClickDetector" referent="RBX14">
				<Properties>
					<float name="MaxActivationDistance">50</float>
					<string name="Name">ClickDetector</string>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX15">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">brick=script.Parent
other=brick.Parent.play
music=brick.Parent.music

function onClicked()

music:Stop()

brick.Size=Vector3.new(2, 0.8, 3)
brick.Position=brick.Position-Vector3.new(0, 0.2, 0)

other.Size=Vector3.new(2, 1.2, 3)

end

script.Parent.ClickDetector.MouseClick:connect(onClicked)
</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Sound" referent="RBX16">
			<Properties>
				<bool name="Looped">true</bool>
				<string name="Name">music</string>
				<float name="Pitch">1</float>
				<int name="PlayCount">-1</int>
				<bool name="PlayOnRemove">false</bool>
				<Content name="SoundId"><url>http://emeraldolds.glados.pro/asset?id=1846368080</url></Content>
				<float name="Volume">1</float>
				<bool name="archivable">true</bool>
			</Properties>
		</Item>
	</Item>
</roblox>


