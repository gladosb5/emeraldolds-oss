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
			<string name="Name">Jetpack</string>
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
				<string name="Name">Jetpack</string>
				<Ref name="PrimaryPart">null</Ref>
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
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">24</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>0.768126369</Y>
						<Z>167.5</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>-1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
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
					<string name="Name">Flame2</string>
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
					<float name="Transparency">0.400000006</float>
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
				<Item class="SpecialMesh" referent="RBX3">
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
							<X>0.699999988</X>
							<Y>6</Y>
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
				<Item class="Script" referent="RBX4">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<ProtectedString name="Source">while true do
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Cool yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Cool yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Cool yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
end </ProtectedString>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
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
						<X>-47.5</X>
						<Y>1.66831112</Y>
						<Z>166.5</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>-1</R20>
						<R21>0</R21>
						<R22>0</R22>
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
						<X>2</X>
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="BlockMesh" referent="RBX6">
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
							<X>1</X>
							<Y>1.5</Y>
							<Z>0.600000024</Z>
						</Vector3>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
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
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>1.66831112</Y>
						<Z>167.399902</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>-1</R20>
						<R21>0</R21>
						<R22>0</R22>
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
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX8">
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
							<X>1</X>
							<Y>2</Y>
							<Z>0.800000012</Z>
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
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>2.3682766</Y>
						<Z>167.399902</Z>
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
							<X>0.800000012</X>
							<Y>3</Y>
							<Z>0.800000012</Z>
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
					<token name="BottomSurface">0</token>
					<token name="BottomSurfaceInput">0</token>
					<int name="BrickColor">24</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>0.63559562</Y>
						<Z>165.5</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>0</R02>
						<R10>0</R10>
						<R11>-1</R11>
						<R12>0</R12>
						<R20>0</R20>
						<R21>0</R21>
						<R22>-1</R22>
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
					<string name="Name">Flame1</string>
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
					<float name="Transparency">0.400000006</float>
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
							<X>0.699999988</X>
							<Y>6</Y>
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
				<Item class="Script" referent="RBX13">
					<Properties>
						<bool name="Disabled">false</bool>
						<Content name="LinkedSource"><null></null></Content>
						<string name="Name">Script</string>
						<ProtectedString name="Source">while true do
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Cool yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Cool yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Cool yellow&quot;)
	wait(0.5)
	script.Parent.BrickColor = BrickColor.new(&quot;Bright yellow&quot;)
	wait(0.5)
end </ProtectedString>
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
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>2.10000014</Y>
						<Z>166.5</Z>
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
						<Y>2</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX15">
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
							<X>1</X>
							<Y>1.29999995</Y>
							<Z>0.800000012</Z>
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
						<X>-47.2001953</X>
						<Y>1.86820722</Y>
						<Z>166.5</Z>
						<R00>0</R00>
						<R01>0</R01>
						<R02>1</R02>
						<R10>0</R10>
						<R11>1</R11>
						<R12>0</R12>
						<R20>-1</R20>
						<R21>0</R21>
						<R22>0</R22>
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
						<X>2</X>
						<Y>2</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="BlockMesh" referent="RBX17">
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
							<X>1</X>
							<Y>0.699999988</Y>
							<Z>0.5</Z>
						</Vector3>
						<Vector3 name="VertexColor">
							<X>1</X>
							<Y>1</Y>
							<Z>1</Z>
						</Vector3>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
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
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>3.29999995</Y>
						<Z>166.5</Z>
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
						<Y>0.400000006</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX19">
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
							<X>0.800000012</X>
							<Y>3</Y>
							<Z>0.800000012</Z>
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
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>1.70000005</Y>
						<Z>165.5</Z>
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
						<Y>1</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX21">
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
							<X>1</X>
							<Y>2</Y>
							<Z>0.800000012</Z>
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
			<Item class="Part" referent="RBX22">
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
					<int name="BrickColor">194</int>
					<CoordinateFrame name="CFrame">
						<X>-47.5</X>
						<Y>2.4000001</Y>
						<Z>165.5</Z>
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
						<Y>0.400000006</Y>
						<Z>1</Z>
					</Vector3>
				</Properties>
				<Item class="SpecialMesh" referent="RBX23">
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
							<X>0.800000012</X>
							<Y>3</Y>
							<Z>0.800000012</Z>
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
					<int name="BrickColor">1013</int>
					<CoordinateFrame name="CFrame">
						<X>-46.5498047</X>
						<Y>1.85563397</Y>
						<Z>166.512451</Z>
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
					<string name="Name">Middle</string>
					<float name="Reflectance">0.100000001</float>
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
					<float name="Transparency">1</float>
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
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-44.5</X>
					<Y>0.699999988</Y>
					<Z>166.5</Z>
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
				<string name="Name">TheButton</string>
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
			<Item class="Script" referent="RBX26">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Torso</string>
					<ProtectedString name="Source">function onTouched(hit)
	if hit.Parent:findFirstChild(&quot;Humanoid&quot;) ~= nil and hit.Parent:findFirstChild(&quot;Jetpack&quot;) == nil then
		local g = script.Parent.Parent.Jetpack:clone()
		g.Parent = hit.Parent
		local C = g:GetChildren()
		for i=1, #C do
			if C[i].className == &quot;Part&quot; then
				local W = Instance.new(&quot;Weld&quot;)
				W.Part0 = g.Middle
				W.Part1 = C[i]
				local CJ = CFrame.new(g.Middle.Position)
				local C0 = g.Middle.CFrame:inverse()*CJ
				local C1 = C[i].CFrame:inverse()*CJ
				W.C0 = C0
				W.C1 = C1
				W.Parent = g.Middle
			end
				local Y = Instance.new(&quot;Weld&quot;)
				Y.Part0 = hit.Parent.Torso
				Y.Part1 = g.Middle
				Y.C0 = CFrame.new(0, 0, 0)
				Y.Parent = Y.Part0
		end

		local h = g:GetChildren()
		for i = 1, # h do
			h[i].Anchored = false
			h[i].CanCollide = false
		end
		
	end
end

script.Parent.Touched:connect(onTouched)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX27">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">Script</string>
					<ProtectedString name="Source">function onTouch(hit)

	local ptt = game.Players:playerFromCharacter(hit.Parent)
	if ptt == nil then return end 
	local wfp = script.Parent:findFirstChild(&quot;GuiMain&quot;):clone() --change &quot;NameOfTheWeaponHere&quot; to the weapon you want to give
	if wfp == nil then return end 
	wfp.Parent = ptt.PlayerGui

end

script.Parent.Touched:connect(onTouch)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
			<Item class="GuiMain" referent="RBX28">
				<Properties>
					<string name="Name">GuiMain</string>
					<bool name="archivable">true</bool>
				</Properties>
				<Item class="Frame" referent="RBX29">
					<Properties>
						<bool name="Active">false</bool>
						<Color3 name="BackgroundColor3">4285361772</Color3>
						<float name="BackgroundTransparency">1</float>
						<Color3 name="BorderColor3">4281545523</Color3>
						<int name="BorderSizePixel">1</int>
						<string name="Name">Frame</string>
						<UDim2 name="Position">
							<XS>0</XS>
							<XO>0</XO>
							<YS>0</YS>
							<YO>0</YO>
						</UDim2>
						<UDim2 name="Size">
							<XS>0.389999986</XS>
							<XO>0</XO>
							<YS>0.300000012</YS>
							<YO>0</YO>
						</UDim2>
						<token name="SizeConstraint">0</token>
						<bool name="Visible">true</bool>
						<int name="ZIndex">1</int>
						<bool name="archivable">true</bool>
					</Properties>
					<Item class="TextButton" referent="RBX30">
						<Properties>
							<bool name="Active">true</bool>
							<bool name="AutoButtonColor">true</bool>
							<Color3 name="BackgroundColor3">4294572537</Color3>
							<float name="BackgroundTransparency">0</float>
							<Color3 name="BorderColor3">4279970357</Color3>
							<int name="BorderSizePixel">1</int>
							<string name="Name">Jeton</string>
							<UDim2 name="Position">
								<XS>0.100000001</XS>
								<XO>0</XO>
								<YS>0.312570006</YS>
								<YO>0</YO>
							</UDim2>
							<bool name="Selected">false</bool>
							<UDim2 name="Size">
								<XS>0.200000003</XS>
								<XO>0</XO>
								<YS>0.300000012</YS>
								<YO>0</YO>
							</UDim2>
							<token name="SizeConstraint">0</token>
							<string name="Text">Jetpack On</string>
							<Color3 name="TextColor3">4278190080</Color3>
							<float name="TextTransparency">0</float>
							<bool name="TextWrap">false</bool>
							<token name="TextXAlignment">2</token>
							<token name="TextYAlignment">1</token>
							<bool name="Visible">true</bool>
							<int name="ZIndex">1</int>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX31">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">Script</string>
								<ProtectedString name="Source">local player = script.Parent.Parent.Parent.Parent.Parent.Character
local bv = script.BVel:clone()

function onClick(mouse)

	player.Jetpack.Flame2.Transparency = 0.2
	player.Jetpack.Flame1.Transparency = 0.2
	bv.Parent = player.Jetpack.Middle

end

script.Parent.MouseButton1Down:connect(onClick)</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
							<Item class="BodyVelocity" referent="RBX32">
								<Properties>
									<string name="Name">BVel</string>
									<float name="P">1250</float>
									<bool name="archivable">true</bool>
									<Vector3 name="maxForce">
										<X>0</X>
										<Y>500000</Y>
										<Z>0</Z>
									</Vector3>
									<Vector3 name="velocity">
										<X>0</X>
										<Y>50</Y>
										<Z>0</Z>
									</Vector3>
								</Properties>
							</Item>
						</Item>
					</Item>
					<Item class="TextButton" referent="RBX33">
						<Properties>
							<bool name="Active">true</bool>
							<bool name="AutoButtonColor">true</bool>
							<Color3 name="BackgroundColor3">4294572537</Color3>
							<float name="BackgroundTransparency">0</float>
							<Color3 name="BorderColor3">4279970357</Color3>
							<int name="BorderSizePixel">1</int>
							<string name="Name">Jetoff</string>
							<UDim2 name="Position">
								<XS>0.300000012</XS>
								<XO>0</XO>
								<YS>0.312599987</YS>
								<YO>0</YO>
							</UDim2>
							<bool name="Selected">false</bool>
							<UDim2 name="Size">
								<XS>0.200000003</XS>
								<XO>0</XO>
								<YS>0.300000012</YS>
								<YO>0</YO>
							</UDim2>
							<token name="SizeConstraint">0</token>
							<string name="Text">Jetpack Off</string>
							<Color3 name="TextColor3">4278190080</Color3>
							<float name="TextTransparency">0</float>
							<bool name="TextWrap">false</bool>
							<token name="TextXAlignment">2</token>
							<token name="TextYAlignment">1</token>
							<bool name="Visible">true</bool>
							<int name="ZIndex">1</int>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX34">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">Script</string>
								<ProtectedString name="Source">local player = script.Parent.Parent.Parent.Parent.Parent.Character

function onClick(mouse)
	if player.Jetpack.Middle:findFirstChild(&quot;BHov&quot;) then 
		player.Jetpack.Flame2.Transparency = 1
		player.Jetpack.Flame1.Transparency = 1
		player.Jetpack.Middle.BHov:remove()
	end
end

script.Parent.MouseButton1Down:connect(onClick)</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
						<Item class="Script" referent="RBX35">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">Script</string>
								<ProtectedString name="Source">local player = script.Parent.Parent.Parent.Parent.Parent.Character

function onClick(mouse)
	if player.Jetpack.Middle:findFirstChild(&quot;BVel&quot;) then 
		player.Jetpack.Flame2.Transparency = 1
		player.Jetpack.Flame1.Transparency = 1
		player.Jetpack.Middle.BVel:remove()
	end
end

script.Parent.MouseButton1Down:connect(onClick)</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
						</Item>
					</Item>
					<Item class="TextButton" referent="RBX36">
						<Properties>
							<bool name="Active">true</bool>
							<bool name="AutoButtonColor">true</bool>
							<Color3 name="BackgroundColor3">4294572537</Color3>
							<float name="BackgroundTransparency">0</float>
							<Color3 name="BorderColor3">4279970357</Color3>
							<int name="BorderSizePixel">1</int>
							<string name="Name">Hover</string>
							<UDim2 name="Position">
								<XS>0.300000012</XS>
								<XO>0</XO>
								<YS>0.60800004</YS>
								<YO>0</YO>
							</UDim2>
							<bool name="Selected">false</bool>
							<UDim2 name="Size">
								<XS>0.200000003</XS>
								<XO>0</XO>
								<YS>0.300000012</YS>
								<YO>0</YO>
							</UDim2>
							<token name="SizeConstraint">0</token>
							<string name="Text">Hover</string>
							<Color3 name="TextColor3">4279970357</Color3>
							<float name="TextTransparency">0</float>
							<bool name="TextWrap">false</bool>
							<token name="TextXAlignment">2</token>
							<token name="TextYAlignment">1</token>
							<bool name="Visible">true</bool>
							<int name="ZIndex">1</int>
							<bool name="archivable">true</bool>
						</Properties>
						<Item class="Script" referent="RBX37">
							<Properties>
								<bool name="Disabled">false</bool>
								<Content name="LinkedSource"><null></null></Content>
								<string name="Name">Script</string>
								<ProtectedString name="Source">local player = script.Parent.Parent.Parent.Parent.Parent.Character
local bv = script.BVel:clone()

function onClick(mouse)

	player.Jetpack.Flame2.Transparency = 0.5
	player.Jetpack.Flame1.Transparency = 0.5
	bv.Parent = player.Jetpack.Middle

end

script.Parent.MouseButton1Down:connect(onClick)</ProtectedString>
								<bool name="archivable">true</bool>
							</Properties>
							<Item class="BodyVelocity" referent="RBX38">
								<Properties>
									<string name="Name">BVel</string>
									<float name="P">1250</float>
									<bool name="archivable">true</bool>
									<Vector3 name="maxForce">
										<X>0</X>
										<Y>500000</Y>
										<Z>0</Z>
									</Vector3>
									<Vector3 name="velocity">
										<X>0</X>
										<Y>-6</Y>
										<Z>0</Z>
									</Vector3>
								</Properties>
							</Item>
						</Item>
					</Item>
				</Item>
			</Item>
		</Item>
	</Item>
</roblox>


