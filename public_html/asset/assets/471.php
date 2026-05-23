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
			<string name="Name">Elevator</string>
			<Ref name="PrimaryPart">null</Ref>
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
				<token name="BottomSurface">0</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">26</int>
				<CoordinateFrame name="CFrame">
					<X>-1229</X>
					<Y>108.800003</Y>
					<Z>699</Z>
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
				<string name="Name">Plate</string>
				<float name="Reflectance">0.5</float>
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
				<token name="TopSurface">2</token>
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
					<X>64</X>
					<Y>2.4000001</Y>
					<Z>64</Z>
				</Vector3>
			</Properties>
			<Item class="BodyGyro" referent="RBX2">
				<Properties>
					<float name="D">500</float>
					<string name="Name">BodyGyro</string>
					<float name="P">3000</float>
					<bool name="archivable">true</bool>
					<CoordinateFrame name="cframe">
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
					<Vector3 name="maxTorque">
						<X>400000</X>
						<Y>0</Y>
						<Z>400000</Z>
					</Vector3>
				</Properties>
			</Item>
			<Item class="BodyVelocity" referent="RBX3">
				<Properties>
					<string name="Name">BodyVelocity</string>
					<float name="P">1250</float>
					<bool name="archivable">true</bool>
					<Vector3 name="maxForce">
						<X>4000</X>
						<Y>4000</Y>
						<Z>4000</Z>
					</Vector3>
					<Vector3 name="velocity">
						<X>0</X>
						<Y>2</Y>
						<Z>0</Z>
					</Vector3>
				</Properties>
			</Item>
			<Item class="Script" referent="RBX4">
				<Properties>
					<bool name="Disabled">false</bool>
					<Content name="LinkedSource"><null></null></Content>
					<string name="Name">ElevatorScript</string>
					<ProtectedString name="Source">script.Parent.BodyGyro.cframe = script.Parent.CFrame

local bottomY = script.Parent.Position.y
local topY = bottomY + 315



function AboutToMove()
	script.Parent.BrickColor = BrickColor.new(21)
	wait(5)
	script.Parent.BrickColor = BrickColor.new(26)
end

function BottomButtonPress(part)

	-- if we are at the top, bring the thing down

	if (script.Parent.Position.y &gt; bottomY + ((topY - bottomY) / 2)) then
		-- we&apos;re at the top go down
		doMove(bottomY)
	end


	-- we&apos;re at the bottom go up
	doMove(topY)


end

function TopButtonPress(part)

	if (script.Parent.Position.y &lt; bottomY + ((topY - bottomY) / 2)) then
		-- we&apos;re at the bottom go up
		doMove(topY)
	end


	-- we&apos;re at the top go down
	doMove(bottomY)

	


end


function doMove(target)

	AboutToMove()


	if (script.Parent.Position.y &lt; target) then
		-- going up

		while (script.Parent.Position.y &lt; target) do
			script.Parent.BodyVelocity.velocity = Vector3.new(0,20,0)
			wait(.1)
		end

	else
		-- going down
		while (script.Parent.Position.y &gt; target) do
			script.Parent.BodyVelocity.velocity = Vector3.new(0,-20,0)
			wait(.1)
		end

	end

	script.Parent.BodyVelocity.velocity = Vector3.new(0,0,0)
	
	

end




script.Parent.Parent.BottomButton.Touched:connect(BottomButtonPress)
script.Parent.Parent.TopButton.Touched:connect(TopButtonPress)</ProtectedString>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
		<Item class="Part" referent="RBX5">
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
				<int name="BrickColor">37</int>
				<CoordinateFrame name="CFrame">
					<X>-1135</X>
					<Y>99.4000015</Y>
					<Z>723</Z>
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
				<string name="Name">BottomButton</string>
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
				<token name="TopSurface">5</token>
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
					<Z>4</Z>
				</Vector3>
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
				<token name="BottomSurface">4</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">37</int>
				<CoordinateFrame name="CFrame">
					<X>-1270</X>
					<Y>424.600098</Y>
					<Z>729</Z>
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
				<string name="Name">TopButton</string>
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
				<token name="TopSurface">5</token>
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
					<Z>4</Z>
				</Vector3>
			</Properties>
			<Item class="Snap" referent="RBX7">
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
						<X>-1</X>
						<Y>162.600006</Y>
						<Z>-47.5</Z>
						<R00>-1</R00>
						<R01>0</R01>
						<R02>-0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>-1</R12>
						<R20>0</R20>
						<R21>-1</R21>
						<R22>-0</R22>
					</CoordinateFrame>
					<string name="Name">Snap</string>
					<Ref name="Part0">RBX6</Ref>
					<Ref name="Part1">RBX8</Ref>
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
				<token name="BottomSurface">4</token>
				<token name="BottomSurfaceInput">0</token>
				<int name="BrickColor">1003</int>
				<CoordinateFrame name="CFrame">
					<X>-1168.44531</X>
					<Y>104.471176</Y>
					<Z>699</Z>
					<R00>0.984375</R00>
					<R01>0.176084816</R01>
					<R02>0</R02>
					<R10>-0.176084816</R10>
					<R11>0.984375</R11>
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
				<string name="Name">Part3</string>
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
				<token name="TopSurface">2</token>
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
					<X>57</X>
					<Y>0.400000006</Y>
					<Z>54</Z>
				</Vector3>
			</Properties>
		</Item>
		<Item class="Part" referent="RBX10">
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
				<int name="BrickColor">1009</int>
				<CoordinateFrame name="CFrame">
					<X>-1229</X>
					<Y>103.400002</Y>
					<Z>699</Z>
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
					<X>70</X>
					<Y>8.40000057</Y>
					<Z>70</Z>
				</Vector3>
			</Properties>
			<Item class="Snap" referent="RBX11">
				<Properties>
					<CoordinateFrame name="C0">
						<X>0</X>
						<Y>4.20000029</Y>
						<Z>0</Z>
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
					<CoordinateFrame name="C1">
						<X>-29</X>
						<Y>-32.0000076</Y>
						<Z>-34</Z>
						<R00>1</R00>
						<R01>0</R01>
						<R02>-0</R02>
						<R10>0</R10>
						<R11>0</R11>
						<R12>1</R12>
						<R20>0</R20>
						<R21>-1</R21>
						<R22>0</R22>
					</CoordinateFrame>
					<string name="Name">Snap</string>
					<Ref name="Part0">RBX10</Ref>
					<Ref name="Part1">RBX12</Ref>
					<bool name="archivable">true</bool>
				</Properties>
			</Item>
		</Item>
	</Item>
</roblox>


